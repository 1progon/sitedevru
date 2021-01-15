<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_posts')
            ->insert(
                [
                    [
                        'title' => 'First test post',
                        'slug' => Str::slug('First title post'),
                        'description' => 'First post desc',
                        'article' => 'First Article post text',
                        'blog_categories_id' => 1
                    ],
                    [
                        'title' => 'Second test post',
                        'slug' => Str::slug('Second title post'),
                        'description' => 'Second post desc',
                        'article' => 'Second Article post text',
                        'blog_categories_id' => 1
                    ],
                    [
                        'title' => 'Third test post',
                        'slug' => Str::slug('Third title post'),
                        'description' => 'Third post desc',
                        'article' => 'Third Article post text',
                        'blog_categories_id' => 1
                    ],


                ]

            );
    }
}
