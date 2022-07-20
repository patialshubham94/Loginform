<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User_loginMethods;
use App\Http\Controllers\B2BLeadGenerationController;


Route::get('/', function () {
    return view('login');
})->name('login');
Route::post('/',[User_loginMethods::class,'get_LoginData']);

Route::get('/registration',  [User_loginMethods::class,'get_Registration']);
Route::post('/registration', [User_loginMethods::class,'get_RegistrationData']);


Route::get('/logout',function(){
    session()->forget('name');
    session()->flash('error','Logout successfully');
    return redirect('/');

});

// Route::



//middleware section##################################################################
// Route::group(['middleware' =>['check']],function(){
//     Route::get('/user', [User_loginMethods::class,'get_User'])->name('userlogin');
// });
Route::get('/user', [User_loginMethods::class,'get_User'])->middleware('check')->name('userlogin');

// //copy ffrom laragigs###################################################################
// // Show Register/Create Form
// Route::get('/register', [User_loginMethods::class, 'create'])->middleware('guest');

// // Create New User
// Route::post('/users', [User_loginMethods::class, 'store']);

// // Log User Out
// Route::post('/logout', [User_loginMethods::class, 'logout'])->middleware('auth');

// // Show Login Form
// Route::get('/login', [User_loginMethods::class, 'login'])->name('login')->middleware('guest');

// // Log In User
// Route::post('/users/authenticate', [User_loginMethods::class, 'authenticate']);



Route::get('/f', function () {
    return view('B2BLeadGeneration.form2');
});

Route::get('/', [B2BLeadGenerationController::class, 'createForm']);
Route::post('/', [B2BLeadGenerationController::class, 'ContactUsForm'])->name('contact.store');

