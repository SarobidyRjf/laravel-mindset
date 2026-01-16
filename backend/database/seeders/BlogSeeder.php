<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory(3)->create()->each(function ($user){
            Post::factory(2)->create([
                'user_id' => $user->id
            ])->each(function ($post) use 
            ($user){
                Comment::factory(3)->create([
                    'post_id'=> $post->id,
                    'user_id'=> $post->id
                ]);
            });
        });
    }
}
