<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\EltunController;
use App\Http\controllers\HaqqindaController;


Route::get('/' , function (){
  return view('max');
});

Route::get('/ingilis' ,function(){
    return "Ingilis dili";
});

Route::get('/ramal','App\Http\controllers\RamalController@index');
Route::get('/haqqinda' ,[HaqqindaController:: class , 'index']);