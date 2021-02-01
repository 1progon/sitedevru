<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $prices = [
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Сайт визитка',
                'slug' => Str::slug('Простой сайт визитка'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/3462/3462067.svg',
                'price' => 28000,
                'on_homepage' => true
                //'included' => [
                //    'WordPress CMS Website', 'Simple company website', 'Business card site', 'Admin panel', 'SEO Friendly',
                //    'Domain name',
                //]
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Интернет-магазин',
                'slug' => Str::slug('сайт интернет магазина'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/3462/3462067.svg',
                'price' => 78000,
                'on_homepage' => true
                //'included' => [
                //    'WordPress WooCommerce Shop CMS',
                //    'Simple shop',
                //    'Blog pages',
                //    'Business card part',
                //    'Simple admin panel',
                //    'Domain name',
                //    'Good hosting'
                //]
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Сложный сайт-портал',
                'slug' => Str::slug('Сайт бизнес портал'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/3462/3462067.svg',
                'price' => 150000,
                'on_homepage' => true
                //'included' => [
                //    'Blog',
                //    'Admin panel',
                //    '....'
                //]
            ],

        ];

        $included = [
            [
                'price_id' => 1,
                'title' => 'Сайт на системе управления CMS',
                'slug' => Str::slug('сайт на системе управления'),
            ],

            [
                'price_id' => 1,
                'title' => 'Простой сайт компании',
                'slug' => Str::slug('простой сайт компании'),
            ],
        ];


        DB::table('prices')
            ->insert($prices);

        //DB::table('price_included')
        //    ->insert($included);
    }
}
