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
                'title' => 'Company Business card',
                'slug' => Str::slug('Company Business card'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/3462/3462067.svg',
                'price' => 190,
                'on_homepage' => true
                //'included' => [
                //    'WordPress CMS Website', 'Simple company website', 'Business card site', 'Admin panel', 'SEO Friendly',
                //    'Domain name',
                //]
            ],
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'title' => 'eCommerce Website',
                'slug' => Str::slug('eCommerce Website'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/3462/3462067.svg',
                'price' => 390,
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
                'title' => 'Business Portal',
                'slug' => Str::slug('Business Portal'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/3462/3462067.svg',
                'price' => 790,
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
                'title' => 'WordPress CMS Website',
                'slug' => Str::slug('WordPress CMS Website'),
            ],

            [
                'price_id' => 1,
                'title' => 'Simple company website',
                'slug' => Str::slug('Simple company website'),
            ],
        ];


        DB::table('prices')
            ->insert($prices);

        //DB::table('price_included')
        //    ->insert($included);
    }
}
