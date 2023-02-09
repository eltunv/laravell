<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaqqindaController extends Controller
{
    public function index(){
        return "Salam Dunya";
    }

    public function insan($ad){
     return $ad."Haqqinda Melumat";
    }
}
