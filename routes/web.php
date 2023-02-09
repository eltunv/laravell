<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ElaqeController;
use App\Http\controllers\MainController;

Route::get('/eltun','App\Http\controllers\EltunController@index');

Route::get('/telebe' , function(){
     return 'telebe ad';
});

Route::get('/selli', function(){
    return 'Selli Xanim';
});

Route::get('/haqqinda','App\Http\controllers\HaqqindaController@index');
Route::get('/elaqe','App\Http\controllers\ElaqeController@index');
Route::get('/haqqinda/{ad}','App\Http\controllers\HaqqindaController@insan');
Route::get('/main', [MainController::class , 'index']);