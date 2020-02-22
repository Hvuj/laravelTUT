<?php

namespace App\Http\Controllers;

use App\Laravel;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class LaravelController extends Controller
{
    public function index(Request $request){

        // $laravel = Laravel::all();
        $laravel = Laravel::where('active', $request->query('active'))->get();
        return view('laravel.index', compact('laravel'));
    }

    public function create(){
        $laravel = new Laravel();

        return view('laravel.create', compact('laravel'));
    }

    public function store(){

        // Laravel::create($this->validateData());
        $laravel = Laravel::create($this->validateData());

        Mail::to($laravel->email)->send(new WelcomeMail());

        return redirect('/laravel/users/');
        // return redirect('/laravel/users/' . $laravel->id);
    }

    public function show(Laravel $laravel){
        return view('laravel.show', compact('laravel'));
    }

    public function edit(Laravel $laravel){
        return view('laravel.edit', compact('laravel'));
    }

    public function update(Laravel $laravel){
        $laravel->update($this->validateData());

        return redirect('/laravel/users/');
    }

    public function destroy(Laravel $laravel){
        $laravel->delete();

        return redirect('/laravel/users');
    }

    protected function validateData(){
        return request()->validate([
            'name' => 'required|max:25',
            'last' => 'required|max:35',
            'email' => 'required|email'
        ]);
    }
}
