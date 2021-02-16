<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Model\User\User;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::post('/send-message', [\App\Http\Controllers\Other\SendMessage::class, 'postMessage'])
    ->name('message.send');


//Main pages in views
Route::name('pages.')->group(
    function () {
        Route::prefix('pages')->group(
            function () {
                Route::get('contact', 'Pages\PagesController@contact')->name('contact');
                Route::get('pricing', 'Pages\PagesController@pricing')->name('pricing');
            }
        );
    }
);


//User account panel
Route::middleware(['auth', 'role:' . User::ROLE_USER])
    ->prefix('account')
    ->group(
        function () {
            Route::get('dashboard', [DashboardController::class, 'index'])
                ->name('dashboard.user');
        }
    );


//Admin account panel
Route::middleware(['auth', 'role:' . User::ROLE_ADMIN])
    ->prefix('admin')
    ->group(
        function () {
            Route::get('dashboard', [DashboardController::class, 'index'])
                ->name('dashboard.admin');

            Route::resource('pages', 'Pages\PagesController')
                ->except(['index', 'show', 'pricing', 'contact']);

            Route::get('pages', 'Pages\PagesController@adminIndex')
                ->name('pages.admin.index');

            Route::resource('templates', 'Templates\TemplatesController')
                ->except(['index', 'show']);

            Route::get('templates', 'Templates\TemplatesController@adminIndex')
                ->name('templates.admin.index');

            Route::resource('services', 'Services\ServicesController')
                ->except(['index', 'show']);

            Route::get('services', 'Services\ServicesController@adminIndex')
                ->name('services.admin.index');

            Route::resource('prices', 'Prices\PricesController')
                ->except(['index', 'show']);

            Route::get('prices', 'Prices\PricesController@adminIndex')
                ->name('prices.admin.index');
        }
    );


//All other pages, not from views
Route::resource('pages', 'Pages\PagesController')
    ->only(['index', 'show']);

Route::resource('templates', 'Templates\TemplatesController')
    ->only(['index', 'show']);
Route::resource('services', 'Services\ServicesController')
    ->only(['index', 'show']);
Route::resource('prices', 'Prices\PricesControllerr')
    ->only(['index', 'show']);


Route::resource('blogcats', 'Blog\BlogCategoriesController')->names(['index' => 'blogcats']);
Route::resource('blogs', 'Blog\BlogPostsController')->names(['index' => 'blog']);



