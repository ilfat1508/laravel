<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class delPostController extends Controller
{
    public function index()
    {

        $posts = Post::all();
        return view('post.index', compact('posts'));


    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => ''
        ]);
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

    public function show(Post $post)
    {
        //$post=Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }


    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags'=>'',
        ]);
        $tags=$data['tags'];
        unset($data['tags']);

        $post->update($data);
   $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd($post->title);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function firstOrCreate()
    {

        $anotherPost = [
            'title' => 'some post',
            'content' => 'some  content',
            'image' => 'imageblabla.jpg',
            'likes' => '10000',
            'is_published' => '1',
        ];
        $post = Post::firstOrCreate([
            'title' => 'some post',
        ], $anotherPost);
        dump($post->content);

    }

    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => 'update or create',
            'content' => 'update or create some post',
            'image' => 'update some image blal',
            'likes' => 5000,
            'is_published' => 1
        ];
        $post = Post::updateOrCreate([
            'title' => 'some not post'
        ], [
            'title' => 'not update or create',
            'content' => 'update or create some post',
            'image' => 'update some image blal',
            'likes' => 5000,
            'is_published' => 1
        ]);
        dump($post->title);
    }
}
