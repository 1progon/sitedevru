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


Route::name('pages.')->group(
    function () {
        Route::prefix('pages')->group(
            function () {
                Route::get('contact', 'Pages\PagesController@contact')->name('contact');
                Route::get('services', 'Pages\PagesController@services')->name('services');
                Route::get('pricing', 'Pages\PagesController@pricing')->name('pricing');


                //Route::view('features', 'page.features')->name('features');
                //Route::view('privacy', 'page.privacy')->name('privacy');
                //Route::view('terms', 'page.terms')->name('terms');
                //Route::view('sitemap', 'page.sitemap')->name('sitemap');
                //Route::view('faq', 'page.faq')->name('faq');
                //Route::view('report-bug', 'page.report-bug')->name('report-bug');
            }
        );
    }
);

Route::resource('pages', 'Pages\PagesController');


Route::resource('blogs', 'Blog\BlogPostsController')
    ->names(
        [
            'index' => 'blog'
        ]
    );


Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
