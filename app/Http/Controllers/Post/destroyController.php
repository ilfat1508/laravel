<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class destroyController extends Controller
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
