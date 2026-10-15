<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREING_KEY_CHECKS=0;');
        Category::truncate();
        DB::statement('SET FOREING_KEY_CHECKS=1;');

        for($i=0; $i < 20; $i++){
            Category::create(
            ['title' => "Categoria $i",
            'slug' => "categoria-$i"
            ]
            );
        }
    }
}
