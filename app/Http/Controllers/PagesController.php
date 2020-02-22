<?php

namespace App\Http\Controllers;

use App\Service;
use App\Noob;
use App\Suki;
use App\Laravel;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function about(){
        return view('about');
    }

    public function home(){
        return view('home');
    }

    public function UserPage(){
        $sukis = Suki::all();
        return view('suki.UserPage');
    }

    public function users(Request $request){
        $laravels = Laravel::where('active', $request->query('active', 1))->get();
        return view('laravel.users', compact('laravels'));
    }

    // public function email(){
    //     Mail::to('email@email.com')->send(new WelcomeMail());
    //     return new WelcomeMail();
    // }
}
