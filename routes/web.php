<?php
use App\Http\Controllers\AuthCont;
use App\http\Controllers\PageViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomeLogin');
});



Route::get('register', [PageViewController::class, "registerView"])->name("register");

Route::get('login', [PageViewController::class, "loginView"])->name("login");


Route::post('register', [AuthCont::class, "register"])->name("register.post");

