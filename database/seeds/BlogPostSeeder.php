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
                        'title' => 'Первый пост в блоге',
                        'slug' => Str::slug('Первый пост в блоге'),
                        'description' => 'Первый пост в блоге короткое описание',
                        'article' => 'Первый пост в блоге материалы и текст',
                        'blog_categories_id' => 1
                    ],
                    [
                        'title' => 'Второй пост в блоге',
                        'slug' => Str::slug('второй пост в блоге текст'),
                        'description' => 'Второй текст короткое описание',
                        'article' => 'Статья второй текст пример',
                        'blog_categories_id' => 1
                    ],
                    [
                        'title' => 'Третий пост',
                        'slug' => Str::slug('заголовок для третьего поста'),
                        'description' => 'Третий пост описание',
                        'article' => 'Статья для третьего поста',
                        'blog_categories_id' => 1
                    ],


                ]

            );
    }
}
