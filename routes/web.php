<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ElaqeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/telebe' , function(){
     return 'telebe ad';
});

Route::get('/haqqinda','App\Http\controllers\HaqqindaController@index');
Route::get('/elaqe', [ElaqeController::class , 'index']);
Route::get('/haqqinda/{ad}','App\Http\controllers\HaqqindaController@insan');