<?php

namespace App\Http\Controllers;
use App\Models\User as User;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function form(){
        return view(('Connexion/connexion'));
    }
    public function connexion(){

        request()->validate([
            'email' =>['required','email'],
            'password' => ['required'],
        ]);

        $result = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($result){
            flash('You are well connected')->success();
            return view('UserAccount/dashboard');
        }

        return back()->withErrors([
            'email' => "The credentials do not match ! Try again !",
        ]);
        
    }

    
    
}
