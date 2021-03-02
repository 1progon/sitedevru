<?php

use Illuminate\Database\Seeder;

class TemplatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');

        $templates = [
            [
                'created_at' => $date,
                'updated_at' => $date,
                'title' => 'Архитектурный шаблон',
                'slug' => 'architect-4238976274623',
                'description' => '',
                'article' => '',
                'url' => 'live-templates/architect-4238976274623/',
            ],

        ];


        DB::table('templates')->insert($templates);
    }
}
