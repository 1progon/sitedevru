<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonials = [
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Отличная работа',
                'slug' => Str::slug('отличная работа хорошо всё сделано'),
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem commodi minima, natus numquam porro provident suscipit tempora. Autem, deserunt!',
                'user_id' => 1,
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Стоит брать, хорошая работа',
                'slug' => Str::slug('стоит брать хорошая работа'),
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem commodi minima, natus numquam porro provident suscipit tempora. Autem, deserunt!',
                'user_id' => 1,
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Все работы выполнены в срок',
                'slug' => Str::slug('все работы выполнены в срок'),
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem commodi minima, natus numquam porro provident suscipit tempora. Autem, deserunt!',
                'user_id' => 1,
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Прекрасно оптимизировали, подправили контент',
                'slug' => Str::slug('Всё работает как надо'),
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem commodi minima, natus numquam porro provident suscipit tempora. Autem, deserunt!',
                'user_id' => 1,
            ],


        ];

        DB::table('testimonials')
            ->insert($testimonials);
    }
}
