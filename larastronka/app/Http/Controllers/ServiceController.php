<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = \App\Service::all();

        return view('service.index', compact('services'));
    }
    public function store()
    {
        \App\Service::create(request()->validate([
            'name'=>'required|min:5|max:15'
        ]));
        return redirect()->back();
    }
}
