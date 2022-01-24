<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Poste;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    public function index()
    {

        $category = Category::find(1);
        $post = Poste::find(6);
        dump($category->postes);
        dd($post->category);
    }
}
