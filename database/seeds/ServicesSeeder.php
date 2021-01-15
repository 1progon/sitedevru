<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicesWithDesc = [
            [
                'title' => 'WordPress CMS Websites',
                'slug' => Str::slug('WordPress CMS Websites'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 1,
                'description' => 'Good and Simple website with popular Wordpress CMS. Good for company business card website, blog, simple shop or other site. Fast to develop, simple to extend with plugin system and template system. Most popular way to develop websites.'
            ],
            [
                'title' => 'Websites with PHP Laravel Framework',
                'slug' => Str::slug('Classic MPA Website with PHP Laravel Framework'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'description' => 'Classic MPA (Multiple Page Application) website with modern, robust, fast, flexible and one of the best frameworks on PHP Programming language. Good for complex and more custom websites, shops, CRM, ERP and other projects. More time to develop. More expensive',
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 1,
            ],
            [
                'title' => 'WordPress WooCommerce Websites',
                'slug' => Str::slug('WordPress WooCommerce Website Shops'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 1,
                'description' => 'eCommerce website with WordPress CMS and special eCommerce plugin WooCommerce. Light, fast to build not so complex shops and other eCommerce systems. Inexpensive and good variant.'
            ],
        ];

        $services = [

            [
                'title' => 'eCommerce Opencart CMS Shops',
                'slug' => Str::slug('eCommerce Opencart CMS Shops'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
            ],
            [
                'title' => 'eCommerce Prestashop CMS Shops',
                'slug' => Str::slug('eCommerce Prestashop CMS Shops'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'on_homepage' => 0,
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
            ],
            [
                'title' => 'Figma Template Design',
                'slug' => Str::slug('Figma Template Design'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
            ],
            [
                'title' => 'Modern Vue JS Framework SPA Websites with API',
                'slug' => Str::slug('Modern Vue JS Framework SPA Websites with API'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
            ],
            [
                'title' => 'Flutter Framework Mobile Apps',
                'slug' => Str::slug('Flutter Framework Mobile Apps'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
            ],
            [
                'title' => 'Native Mobile Android Apps',
                'slug' => Str::slug('Native Android Apps'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
            ],
            [
                'title' => 'Native Mobile iOS Apps',
                'slug' => Str::slug('Native iOS Apps'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
            ],
            [
                'title' => 'SEO Content Marketing',
                'slug' => Str::slug('SEO Content Marketing'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
            ],
            [
                'title' => 'Domain names Buy and Sell',
                'slug' => Str::slug('Domain names Buy and Sell'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
            ],
            [
                'title' => 'Website Hosting and VPS/Dedicated Servers Support',
                'slug' => Str::slug('Website Hosting and VPS/Dedicated Servers Support'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
            ],
            [
                'title' => 'PSD and Figma to HTML/WordPress/Custom Site Convert',
                'slug' => Str::slug('PSD and Figma to HTML/WordPress/Custom Site Convert'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
            ],
            [
                'title' => 'Link Building Strategy',
                'slug' => Str::slug('Link Building Strategy'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
            ],
            [
                'title' => 'Website Template Creation',
                'slug' => Str::slug('Website Template Creation'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'img' => 'https://www.flaticon.com/svg/static/icons/svg/1471/1471532.svg',
                'on_homepage' => 0,
            ],

        ];

        DB::table('services')
            ->insert($services);

        DB::table('services')
            ->insert($servicesWithDesc);
    }
}
