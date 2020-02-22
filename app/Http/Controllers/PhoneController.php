<?php

namespace App\Http\Controllers;

use App\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(){
        $phones = Phone::all();

        return view('phone.index', compact('phones'));
    }

    public function create(){
        return view('Phone.create');
    }

    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'type' =>'required'
        ]);

        Phone::create($data);

        return redirect('/phones');
    }

    public function show(Phone $phone){
        return view('Phone.show', compact('phone'));
    }
}
