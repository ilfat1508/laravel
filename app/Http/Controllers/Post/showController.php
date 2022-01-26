<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class showController extends Controller
{
    public function __invoke(Post $post)
    {
        //$post=Post::findOrFail($id);
        return view('post.show', compact('post'));

    }
}
