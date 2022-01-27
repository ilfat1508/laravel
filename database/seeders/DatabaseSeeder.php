<?php

namespace Database\Seeders;

use App\Models\Bur;
use App\Models\Burcat;
use App\Models\Category;
use App\Models\Inv;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(20)->create();
        $tags = Tag::factory(50)->create();
        $posts = Post::factory(200)->create();

        foreach ($posts as $post) {
            $tagsId = $tags->random(5)->pluck('id');
            $post->tags()->attach($tagsId);
        }

        Burcat::factory(5)->create();
        $invs = Inv::factory(20)->create();
        $burs = Bur::factory(50)->create();

        foreach ($burs as $bur) {
            $invsId = $invs->random(3)->pluck('id');
            $bur->invs()->attach($invsId);
        }



// \App\Models\User::factory(10)->create();
    }
}
