<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Redirect::route('login');

});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/topup', function () {
    return Inertia::render('Topup');
})->middleware(['auth', 'verified'])->name('topup');
Route::get('/withdraw', function () {
    return Inertia::render('Withdraw');
})->middleware(['auth', 'verified'])->name('withdraw');
Route::get('/vip/1', 'App\Http\Controllers\AdController@showVip_1')->middleware(['auth', 'verified'])->name('vip1');
Route::post('/vip/1/click', 'App\Http\Controllers\AdController@logicVip_1')->middleware(['auth', 'verified'])->name('vip1.post');

Route::get('/vip/2', 'App\Http\Controllers\AdController@showVip_2')->middleware(['auth', 'verified'])->name('vip2');
Route::post('/vip/2/click', 'App\Http\Controllers\AdController@logicVip_2')->middleware(['auth', 'verified'])->name('vip2.post');

Route::get('/vip/3', 'App\Http\Controllers\AdController@showVip_3')->middleware(['auth', 'verified'])->name('vip3');
Route::post('/vip/13/click', 'App\Http\Controllers\AdController@logicVip_3')->middleware(['auth', 'verified'])->name('vip3.post');

Route::get('/vip/4', 'App\Http\Controllers\AdController@showVip_4')->middleware(['auth', 'verified'])->name('vip4');
Route::post('/vip/4/click', 'App\Http\Controllers\AdController@logicVip_4')->middleware(['auth', 'verified'])->name('vip4.post');
require __DIR__.'/auth.php';


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('users')->name('users/')->group(static function() {
            Route::get('/',                                             'UsersController@index')->name('index');
            Route::get('/create',                                       'UsersController@create')->name('create');
            Route::post('/',                                            'UsersController@store')->name('store');
            Route::get('/{user}/edit',                                  'UsersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UsersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{user}',                                      'UsersController@update')->name('update');
            Route::delete('/{user}',                                    'UsersController@destroy')->name('destroy');
        });
    });
});