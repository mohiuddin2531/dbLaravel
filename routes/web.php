<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistration; 

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mul/{a}/{b}', function ($a, $b) {
    return view('mul', ['a'=>$a, 'a'=>$b]);
});

Route::get('/register', [UserRegistration::class, 'index']); 

Route::post('/register', [UserRegistration::class, 'user_registration']); 