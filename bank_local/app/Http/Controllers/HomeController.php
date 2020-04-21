<?php

namespace WSB_BANK\Http\Controllers;

use WSB_BANK\Deposit;
use WSB_BANK\Transfer;
use WSB_BANK\User;
use WSB_BANK\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $balance = $this->getBalence();
        return view('home', compact('balance'));
    }
    public function deposit() {
        return view('deposit');
    }
    public function saveDeposit(Request $request) {
        $message = [
            'min'=> 'Kwota :attribute musi być powyżej :min PLN'
        ];
        $validator = Validator::make($request->all(), [
            'amount' => 'required|min:1|regex:/^\d+(\.\d{1,2})?$/'
        ], $message)->validate();
        $deposit = new Deposit;
        $deposit->user_id = Auth::user()->id;
        $deposit->amount = $request->amount;
        $save = $deposit->save();
        if($save) {
            return back()->with('success', 'Wpłata zakończona sukcesem.');
        }else {
            return back()->with('error', 'Coś poszło nie tak z wpłatą. Proszę spróbować ponownie.');
        }
    }
    public function withdraw() {
        return view('withdraw');
    }
    public function saveWithdraw(Request $request) {
        $message = [
            'min'=> 'Kwota :attribute musi być powyżej :min PLN'
        ];
        $validator = Validator::make($request->all(), [
            'amount' => 'required|min:1|regex:/^\d+(\.\d{1,2})?$/'
        ], $message)->validate();
        $balance = $this->getBalence();
        $amount = $request->amount;
        if($balance < $amount) {
            return redirect()->back()->with('error', 'Niewystarczające środki na koncie do wypłaty.');
        }else {
            $withdraw = new Withdraw;
            $withdraw->user_id = Auth::user()->id;
            $withdraw->amount = $amount;
            $save = $withdraw->save();
            if($save) {
                return back()->with('success', 'Wypłata zakończona sukcesem.');
            }else {
                return back()->with('error', 'Coś poszło nie tak z wypłatą. Proszę spróbować ponownie.');
            }
        }
    }
    public function transfer() {
        return view('transfer');
    }
    public function saveTransfer(Request $request) {
        $message = [
            'min'=> 'Kwota :attribute musi być powyżej :min INR'
        ];
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'amount' => 'required|min:1|regex:/^\d+(\.\d{1,2})?$/'
        ], $message)->validate();
        $email = $request->email;
        $amount = $request->amount;
        $balance = $this->getBalence();
        if($email === Auth::user()->email) {
            return redirect()->back()->with('error', 'Nie możesz przelać pieniędzy do siebie. Spróbuj innego konta.');
        }else {
            $email_exists = User::where('email', $email)->first();
            if(!$email_exists) {
                return redirect()->back()->with('error', 'Adres E-Mail nie został znaleziony. Proszę użyć innego.');
            }else {
                $transferToEmail = $email_exists->id;
            }
            if($amount > $balance) {
                return redirect()->back()->with('error', 'Niewystarczające środki na koncie.');
            }
            $transfer = new Transfer;
            $transfer->transferFrom = Auth::user()->id;
            $transfer->transferTo = $transferToEmail;
            $transfer->amount = $amount;
            $save = $transfer->save();
            if($save) {
                return back()->with('success', 'Przelew zakończony sukcesem.');
            }else {
                return back()->with('error', 'Coś poszło nie tak z operacją. Proszę spróbować ponownie.');
            }
        }
        
    }
    public function statement() {
        $statement = [];
        $deposit = Auth::user()->deposits()->get();
        $balance = 0;
        foreach($deposit as $d) {
            $balance += $d->amount;
            $statement[] = [
                'datetime' => $d->created_at,
                'amount' => number_format($d->amount, 2, ".", ""),
                'type' => 'Uznanie',
                'details' => 'Wpłata',
                'balance' => $balance=number_format($balance, 2, ".", "")
            ];
        }   
        $withdraw = Auth::user()->withdraws()->get();

        foreach($withdraw as $w) {
            $balance -= $w->amount;
            $statement[] = [
                'datetime' => $w->created_at,
                'amount' => number_format($w->amount, 2, ".", ""),
                'type' => 'Obciążenie',
                'details' => 'Wypłata',
                'balance' => number_format($balance, 2, ".", "")
             ];
        }
        $transfer = Transfer::where('transferFrom', Auth::user()->id)->orWhere('transferTo', Auth::user()->id)->get();
        
        $creditTransfer = $transfer->where('transferTo', Auth::user()->id);
        foreach($creditTransfer as $ct) {
            $balance += $ct->amount;
            $user = User::find($ct->transferTo);
            $statement[] = [
                'datetime' => $ct->created_at,
                'amount' => number_format($ct->amount, 2, ".", ""),
                'type' => 'Uznanie',
                'details' => 'Przelew od '.$user->email,
                'balance' => number_format($balance, 2, ".", "")
            ];
        }
        $debitTransfer = $transfer->where('transferFrom', Auth::user()->id);

        foreach($debitTransfer as $dt) {
            $balance -= $dt->amount;
            $user = User::find($dt->transferTo);
            $statement[] = [
                'datetime' => $dt->created_at,
                'amount' => number_format($dt->amount, 2, ".", ""),
                'type' => 'Obciążenie',
                'details' => 'Przelew do '.$user->email,
                'balance' => number_format($balance, 2, ".", "")
            ];
        } 
        $statement = collect($statement)->sortBy('datetime');
        $balance = 0;
        $state = [];
        foreach($statement as $s) {
            if($s['type'] == 'Obciążenie') {
                $balance-=$s['amount'];
            }else {
                $balance+= $s['amount'];
            }
            $s['balance'] = number_format($balance, 2, ".", "");
            $state[] = $s;
        }
        $statement = $state;
        return view('statement', compact('statement'));
    }
    public function getBalence() {
        $balance = 0;
        
        $deposit = Auth::user()->deposits()->get();
        foreach($deposit as $d) {
            $balance += $d->amount;
        }
        $withdraw = Auth::user()->withdraws()->get();
        foreach($withdraw as $w){
            $balance -= $w->amount;
        }
        $transfer = Transfer::where('transferFrom', Auth::user()->id)->orWhere('transferTo', Auth::user()->id)->get();
        $creditTransfer = $transfer->where('transferTo', Auth::user()->id);
        $debitTransfer = $transfer->where('transferFrom', Auth::user()->id);
        foreach($creditTransfer as $ct) {
            $balance += $ct->amount;
        }
        foreach($debitTransfer as $dt) {
            $balance -= $dt->amount;
        }
        return $balance;
    }
}
