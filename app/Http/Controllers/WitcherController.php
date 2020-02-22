<?php

namespace App\Http\Controllers;

use App\Witcher;
use Illuminate\Http\Request;

class WitcherController extends Controller
{
    public function index(){
        $witchers = Witcher::all();

        return view('witcher.index', compact('witchers'));
    }

    public function create(){
        return view('witcher.create');
    }

    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'style' => 'required'
        ]);

        Witcher::create($data);

        return redirect('/witchers');
    }

    public function show(Witcher $witcher){
        return view('witcher.show', compact('witcher'));
    }

    public function edit(Witcher $witcher){
        return view('witcher.edit', compact('witcher'));
    }

    public function update(Witcher $witcher){
        $data = request()->validate([
            'name' =>'required',
            'style' => 'required'
        ]);

        $witcher->update($data);

        return redirect('/witchers');
    }

    public function destroy(Witcher $witcher){
        $witcher->delete();

        return redirect('/witchers');
    }
}
