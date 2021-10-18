<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Auth::routes();
//Middleware ('gest) no permite ingresar a la pestaña logian si ya nos econtramos registrados.
Route::view('/login', 'login')->name('login')->middleware('guest');
//Si nos ecnotramos autenticados el middleware nos redireccionara a la pesataña dashboard
;
Route::resource('times', App\Http\Controllers\TimeController::class)->middleware('auth');
Auth::routes();
