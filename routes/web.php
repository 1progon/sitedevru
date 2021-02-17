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

use App\Http\Controllers\Account\DashboardAccountController;
use App\Http\Controllers\Errors\ErrorsController;
use App\Http\Controllers\Other\SendMessage;
use App\Model\User\User;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomepageController::class, 'index'])
    ->name('homepage');
Route::post('/send-message', [SendMessage::class, 'postMessage'])
    ->name('message.send');

Route::get('no-access', [ErrorsController::class, 'noAccess'])
    ->name('no-access');
Route::get('not-active-user', [ErrorsController::class, 'notActiveUser'])
    ->name('not-active-user');


//Main pages in views
Route::name('pages.')->group(
    function () {
        Route::prefix('pages')->group(
            function () {
                Route::get('contact', 'Pages\PagesController@contact')
                    ->name('contact');
                Route::get('pricing', 'Pages\PagesController@pricing')
                    ->name('pricing');
            }
        );
    }
);


//User account panel
Route::middleware(['auth', 'active_or_not', 'access_roles:' . User::ROLE['user'] . ',' . User::ROLE['admin']])
    ->prefix('account')
    ->group(
        function () {
            Route::get('dashboard', [DashboardAccountController::class, 'index'])
                ->name('dashboard.user');

            Route::get('edit-data', [DashboardAccountController::class, 'editData'])
                ->name('account.edit.data');

            Route::put('update-data', [DashboardAccountController::class, 'updateData'])
                ->name('account.update.data');

            Route::get('edit-password', [DashboardAccountController::class, 'editPassword'])
                ->name('account.edit.password');

            Route::put('update-password', [DashboardAccountController::class, 'updatePassword'])
                ->name('account.update.password');

            Route::get('edit-email', [DashboardAccountController::class, 'editEmail'])
                ->name('account.edit.email');

            Route::put('update-email', [DashboardAccountController::class, 'updateEmail'])
                ->name('account.update.email');
        }
    );


//Admin account panel
Route::middleware(['auth', 'active_or_not', 'access_roles:' . User::ROLE['admin']])
    ->prefix('admin')
    ->group(
        function () {
            Route::get('dashboard', [DashboardController::class, 'index'])
                ->name('dashboard.admin');

            Route::get('users', 'Users\UsersController@adminIndex')
                ->name('admin.users');

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



