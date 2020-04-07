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
        $service = new \App\Service();
        $service->save();
        $service->name = request('name');

        return redirect()->back();
    }
}
