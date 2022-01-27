<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class indexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(10);

        return view('post.index', compact('posts'));

    }
}
