<?php

namespace App\Http\Controllers;

use App\Service;
use App\Noob;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index(){
        $services = Service::all();
        $noobs = Noob::all();

        return view('service.index', compact('services', 'noobs'));
    }

    public function create(){
        return view('service.create');
    }

    public function store(){
        $data  = request()->validate([
            'name' => 'required|min:5|max:25',
            'noob' => 'required'
        ]);
        
        Service::create($data);
        Noob::create($data);
        // $service = new Service();
        // $noobs = new Noob();

        // $service->name = request('name');
        // $service->save();
        // $noobs->noob = request('noob');
        // $noobs->save();

        return redirect('/services');
    }
}
