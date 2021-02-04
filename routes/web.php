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


//All other pages, not from views
Route::resource('pages', 'Pages\PagesController');

Route::resource('templates', 'Templates\TemplatesController');
Route::resource('services', 'Services\ServicesController');


Route::resource('blogcats', 'Blog\BlogCategoriesController')->names(['index' => 'blogcats']);
Route::resource('blogs', 'Blog\BlogPostsController')->names(['index' => 'blog']);


Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
