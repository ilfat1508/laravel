<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class MyThirdController extends Controller
{
    public function third_func()
    {
        $user = User::find(1);
        dump($user);
    }
}
