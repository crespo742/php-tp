<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    //

    public function dashboard(){

        if(auth()->check()){
            return view('UserAccount/dashboard');
        }
       
        flash('You have to be connected to access to this page')->error();
        return back();
    }

    public function signout(){
        auth()->logout();

        return redirect('/connexion');
    }
}
