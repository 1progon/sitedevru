<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                UsersSeeder::class,
                TestimonialsSeeder::class,
                BlogCategoriesSeeder::class,
                BlogPostSeeder::class,
                PricesSeeder::class,
                ServicesSeeder::class,
                PagesSeeder::class,
                PortfolioSeeder::class,
                OurProsSeeder::class,
                TemplatesSeeder::class,
            ]
        );
    }
}
