<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Deneme;

Route::get('/telebe',function(){
   return "Telebe adi";
});

Route::get('/',function(){
   return view('welcome');
});


Route::get('/turkiye', function(){
   return view('ornek');
});

Route::get('/deneme/{masin}',[Deneme::class ,'test']);