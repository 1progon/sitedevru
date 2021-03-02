<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = [
            'title' => 'Главная',
            'slug' => Str::slug('главная'),
        ];

        DB::table('blog_categories')->insert($cats);
    }
}
