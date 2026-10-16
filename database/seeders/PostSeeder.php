<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\title;

class POstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREING_KEY_CHECKS=0;');
        Post::truncate();
        DB::statement('SET FOREING_KEY_CHECKS=1;');

        for($i=0; $i < 30; $i++ ){
            $c = Category::inRandomOrder()->first();

            $title =Str::random(20);

            Post::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur velit ratione sapiente, animi quaerat commodi distinctio veniam totam voluptatem maxime neque ea aliquid illum deserunt, quis rem hic magnam! Nemo?</p>",
                'category-id' => $c->id,
                'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>",
                'posted' =>"yes"
            ]);
        }
    }
}
