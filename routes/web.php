<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/home', function () {
    return view('welcome');
});

Route::view('/', 'home');

Route::view('/cria-conta', 'cria-conta');

Route::view('testedeconteudo', 'teste');

<<<<<<< HEAD
Route::post('/salva-usuario', function (Request $request)
 {dd($request); })->name('salva-usuario');
  
=======
Route::post('/salva-usuario', function (Request $request) {
    dd($request);
})->name('salva-usuario');


>>>>>>> a5e442da1e45242f15c99e9b0c7c261a675257ce
