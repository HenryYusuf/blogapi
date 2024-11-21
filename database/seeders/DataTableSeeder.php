<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->has(Post::factory()->count(10), 'posts')->count(10)->create();
        Post::factory()->has(User::factory(), 'user')->has(Comment::factory()->count(10), 'comments')->count(20)->create();
        Comment::factory()->count(40)->create();
    }
}
