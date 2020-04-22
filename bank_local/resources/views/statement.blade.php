@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="card" id="statement">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold">Stan Konta</h6>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">DATA</th>
                                <th scope="col">KWOTA</th>
                                <th scope="col">RODZAJ</th>
                                <th scope="col">SZCZEGÓŁY</th>
                                <th scope="col">SALDO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($statement as $k => $s)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ date('d-m-Y h:i A', strtotime($s['datetime'])) }}</td>
                                <td>{{ $s['amount'] }}</td>
                                <td>{{ $s['type'] }}</td>
                                <td>{{ $s['details'] }}</td>
                                <td>{{ $s['balance'] }}</td>
                            </tr>
                            @php($i++)
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection