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
        DB::table('blog_categories')
            ->insert(
                [
                    'title' => 'First category',
                    'slug' => Str::slug('First category'),
                    'id' => 1
                ]
            );
    }
}
