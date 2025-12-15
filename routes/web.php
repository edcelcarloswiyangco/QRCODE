<?php
use App\Http\Controllers\AuthCont;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home1');
});


route::post('register',[AuthCont::class,'register'])->name("register");


