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

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomepageController::class, 'index']);
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

Route::middleware('auth')
    ->prefix('admin')
    ->group(
        function () {
            Route::get('dashboard', [DashboardController::class, 'index'])
                ->name('dashboard');

            Route::resource('pages', 'Pages\PagesController')
                ->except(['index', 'show', 'pricing', 'contact']);

            Route::get('/admin/pages', 'Pages\PagesController@adminIndex')
            ->name('pages.admin.index');

            Route::resource('templates', 'Templates\TemplatesController')
                ->except(['index', 'show']);

            Route::get('/admin/templates', 'Templates\TemplatesController@adminIndex')
                ->name('templates.admin.index');

            Route::resource('services', 'Services\ServicesController')
                ->except(['index', 'show']);

            Route::resource('prices', 'Services\ServicesController')
                ->except(['index', 'show']);
        }
    );


//All other pages, not from views
Route::resource('pages', 'Pages\PagesController')
    ->only(['index', 'show']);

Route::resource('templates', 'Templates\TemplatesController')
    ->only(['index', 'show']);
Route::resource('services', 'Services\ServicesController')
    ->only(['index', 'show']);


Route::resource('blogcats', 'Blog\BlogCategoriesController')->names(['index' => 'blogcats']);
Route::resource('blogs', 'Blog\BlogPostsController')->names(['index' => 'blog']);



