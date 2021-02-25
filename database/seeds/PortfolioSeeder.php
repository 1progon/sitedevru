<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolio = [
            [
                'title' => 'Наша работа 1',
                'slug' => Str::slug('Наша работа 1'),
                'img' => 'assets/img/visit/visit_1.jpg',
                'url' => 'javascript:void(0)',
                'description' => '',
            ],
            [
                'title' => 'Наша работа 2',
                'slug' => Str::slug('Наша работа 2'),
                'img' => 'assets/img/visit/visit_1.jpg',
                'url' => 'javascript:void(0)',
                'description' => '',
            ],
            [
                'title' => 'Наша работа 3',
                'slug' => Str::slug('Наша работа 3'),
                'img' => 'assets/img/visit/visit_1.jpg',
                'url' => 'javascript:void(0)',
                'description' => '',
            ],
            [
                'title' => 'Наша работа 4',
                'slug' => Str::slug('Наша работа 4'),
                'img' => 'assets/img/visit/visit_1.jpg',
                'url' => 'javascript:void(0)',
                'description' => '',
            ],
            [
                'title' => 'Наша работа 5',
                'slug' => Str::slug('Наша работа 5'),
                'img' => 'assets/img/visit/visit_1.jpg',
                'url' => 'javascript:void(0)',
                'description' => '',
            ],
            [
                'title' => 'Наша работа 6',
                'slug' => Str::slug('Наша работа 6'),
                'img' => 'assets/img/visit/visit_1.jpg',
                'url' => 'javascript:void(0)',
                'description' => '',
            ],

        ];

        DB::table('portfolio')
            ->insert($portfolio);
    }
}
