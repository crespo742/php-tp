<?php

namespace App\Http\Controllers;
use App\Models\User as User;

use Illuminate\Http\Request;

class InscriptionsController extends Controller
{

   public  function inscription(){
             return view('inscription');
        }
    public function inscriptions(){
        
        request()->validate([
            'email' =>['required','email'],
           
            'password' =>['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
            'name'=>['required'],
            
        ]);
    
    
        $user = User::create([ 
            'email' => request('email'),
            'password' => bcrypt(request('password')), 
            'name' => request('name'),
        ]);
        return "Your email is" . request('email');
    }
}
