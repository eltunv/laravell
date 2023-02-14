<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Deneme extends Controller
{
   function test($masin)
   {
    return "Masinin".$masin;
   }
}
