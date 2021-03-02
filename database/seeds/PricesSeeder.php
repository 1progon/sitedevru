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
                'slug' => Str::slug('Простой сайт визитка цена'),
                'price' => 28000,
                'on_homepage' => true,
                'description' => '',
                //'included' => [
                //    'WordPress CMS Website', 'Simple company website', 'Business card site', 'Admin panel', 'SEO Friendly',
                //    'Domain name',
                //]
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Интернет-магазин',
                'slug' => Str::slug('сайт интернет магазина цена'),
                'price' => 78000,
                'on_homepage' => true,
                'description' => '',
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
                'slug' => Str::slug('Сайт бизнес портал цена'),
                'price' => 150000,
                'on_homepage' => true,
                'description' => '',

            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'Сайт-лендинг',
                'slug' => Str::slug('лендинг сайт цена'),
                'price' => 60000,
                'on_homepage' => false,
                'description' => '',

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


        DB::table('prices')->insert($prices);

        //DB::table('price_included')->insert($included);
    }
}
