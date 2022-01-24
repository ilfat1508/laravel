<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class MySecondController extends Controller
{
 public function second_func(){
     $posts=Car::find(1);
   dump($posts);

 }
}
