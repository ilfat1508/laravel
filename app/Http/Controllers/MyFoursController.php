<?php

namespace App\Http\Controllers;

use App\Models\Comp;
use Illuminate\Http\Request;

class MyFoursController extends Controller
{
public function fours_func(){
    $comps=Comp::find(1);
    dump($comps);
}
}
