<?php

namespace App\Http\Controllers;

use App\Models\Firm;
use App\Models\Tag;
use App\Models\Telik;
use Illuminate\Http\Request;

class TelikController extends Controller
{
    public function index()
    {
         $teliks = Telik::find(1);
        $firms = Firm::find(1);
        dump($firms->title);
           dump($teliks->name);



//     $telik=Telik::find(2);
//
//     $tags=Tag::find(3);
//
////     dump($tags->teliks);
//     dump($telik->tags);

    }
}
