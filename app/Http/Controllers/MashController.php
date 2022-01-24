<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Mash;
use Illuminate\Http\Request;

class MashController extends Controller
{
    public function index()
    {
        $brand = Brand::find(1);
        $mashes= Mash::find(3);
        dump($brand->mashess);
        dump($mashes->brands);
    }
}
