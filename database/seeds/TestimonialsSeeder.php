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
                'title' => 'Good Work My Recommendation',
                'slug' => Str::slug('Good Work My Recommendation'),
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem commodi minima, natus numquam porro provident suscipit tempora. Autem, deserunt!',
                'user_id' => 1,
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Good Work My Recommendation 2',
                'slug' => Str::slug('Good Work My Recommendation 2'),
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem commodi minima, natus numquam porro provident suscipit tempora. Autem, deserunt!',
                'user_id' => 1,
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Good Work My Recommendation 3',
                'slug' => Str::slug('Good Work My Recommendation 3'),
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem commodi minima, natus numquam porro provident suscipit tempora. Autem, deserunt!',
                'user_id' => 1,
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Good Work My Recommendation 4',
                'slug' => Str::slug('Good Work My Recommendation 4'),
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem commodi minima, natus numquam porro provident suscipit tempora. Autem, deserunt!',
                'user_id' => 1,
            ],


        ];

        DB::table('testimonials')
            ->insert($testimonials);
    }
}
