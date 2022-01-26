<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class deleteController extends Controller
{
    public function __invoke()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd($post->title);
    }
}
