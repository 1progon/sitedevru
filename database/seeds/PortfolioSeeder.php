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
                'title' => 'Work 1',
                'slug' => Str::slug('Work 1'),
                'img' => 'assets/img/visit/visit_1.jpg',
                'url' => 'javascript:void(0)'
            ],
            [
                'title' => 'Work 2',
                'slug' => Str::slug('Work 2'),
                'img' => 'assets/img/visit/visit_1.jpg',
                'url' => 'javascript:void(0)'
            ],
            [
                'title' => 'Work 3',
                'slug' => Str::slug('Work 3'),
                'img' => 'assets/img/visit/visit_1.jpg',
                'url' => 'javascript:void(0)'
            ],
            [
                'title' => 'Work 4',
                'slug' => Str::slug('Work 4'),
                'img' => 'assets/img/visit/visit_1.jpg',
                'url' => 'javascript:void(0)'
            ],
            [
                'title' => 'Work 5',
                'slug' => Str::slug('Work 5'),
                'img' => 'assets/img/visit/visit_1.jpg',
                'url' => 'javascript:void(0)'
            ],
            [
                'title' => 'Work 6',
                'slug' => Str::slug('Work 6'),
                'img' => 'assets/img/visit/visit_1.jpg',
                'url' => 'javascript:void(0)'
            ],

        ];

        DB::table('portfolio')
            ->insert($portfolio);
    }
}
