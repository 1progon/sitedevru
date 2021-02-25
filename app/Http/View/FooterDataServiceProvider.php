<?php

namespace App\Http\View;

use App\Model\Page\Page;
use App\Model\Service\Service;
use Illuminate\Support\ServiceProvider;
use View;

class FooterDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'include/footer',
            function ($view) {
                $services = Service::inRandomOrder()->take(5)->get();
                $view->with(compact('services'));
            }
        );
    }
}
