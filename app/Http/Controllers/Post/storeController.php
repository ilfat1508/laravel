<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class storeController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);
//        foreach ($tags as $tag) {
//PostTag::firstOrCreate([
//    'tag_id'=>$tag,
//    'post_id'=>$post->id,
//]);
//        }

        $post->tags()->attach($tags);
        return redirect()->route('post.index');

    }
}
