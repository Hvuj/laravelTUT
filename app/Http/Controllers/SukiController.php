<?php

namespace App\Http\Controllers;

use App\Suki;
use Illuminate\Http\Request;

class SukiController extends Controller
{
    public function index(){
        $sukis = Suki::all();

        return view('suki.index', compact('sukis'));
    }

    public function create(){
        return view('suki.create');
    }
    

    public function store(){

        Suki::create($this->validateData());

        return redirect('/sukis');
    }

    public function show(Suki $suki){
        return view('suki.show', compact('suki'));
    }

    public function edit(Suki $suki){
        return view('suki.edit', compact('suki'));
    }

    public function update(Suki $suki){

        $suki->update($this->validateData());

        return redirect('/sukis');
    }

    public function destroy(Suki $suki){
        $suki->delete();

        return redirect('/sukis');
    }

    protected function validateData(){
        return request()->validate([
            'name' => 'required',
            'last' => 'required'
        ]);
    }
}
