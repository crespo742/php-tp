<?php

use Illuminate\Support\Facades\Route;
//Appeler le model de la table
use App\Models\User as User;
//1er Methode
//use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/information',function(){
    return 'Bonjour ' . request('prenom');
});

// Route::get('/inscription',function(){
//     return view('inscription');
// });


Route::post('/inscription',function(){

    $email = request('email');
    return "Your form is submitted";
    return "Your email is" . request('email');
});


Route::get('/inscription','App\Http\Controllers\InscriptionsController@inscription');

Route::post('inscription','App\Http\Controllers\InscriptionsController@inscriptions');



Route::get('/users/index','App\Http\Controllers\UsersController@index');

Route::get('/users/{id}','App\Http\Controllers\UsersController@show')->name('Show.User');

Route::get('/connexion','App\Http\Controllers\ConnexionController@form');

Route::post('/connexion','App\Http\Controllers\ConnexionController@connexion' );

Route::get('/dashboard','App\Http\Controllers\UserAccountController@dashboard');

Route::get('/signout','App\Http\Controllers\UserAccountController@signout');

Route::get('/password_modification', 'App\Http\Controllers\UserAccountController@password_modification');

Route::get('/news_feed', 'App\Http\Controllers\UsersController@news_feed');

Route::get('/{email}', 'App\Http\Controllers\UsersController@profil')->name('Show.profil');