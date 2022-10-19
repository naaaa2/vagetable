<?php 

use App\Http\Controllers\VegeRegisterController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\OAuth\RedirectToProviderController;
use App\Http\Controllers\OAuth\CallbackFromProviderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;



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
    return view('welcome');
});

Route::prefix('vege_register')->middleware(['auth'])
->controller(VegeRegisterController::class)
->name('vege_register.')
->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/show/{vege_id}', 'show')->name('show');
    Route::get('/edit/{vege_id}', 'edit')->name('edit');
    Route::post('/update/{vege_id}', 'update')->name('update');
    Route::post('/destroy/{vege_id}', 'destroy')->name('destroy');
});

Route::prefix('shopping')->middleware(['auth'])
->controller(ShoppingController::class)
->name('shopping.')
->group(function(){
    Route::get('/list', 'list')->name('list');
    Route::post('/store', 'store')->name('store');
    Route::post('/destroy/{shopping_id}', 'destroy')->name('destroy');
});

Route::prefix('user')->middleware(['auth'])
->controller(UserController::class)
->name('user.')
->group(function(){
    Route::get('/info/{id}', 'info')->name('info');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::post('/destroy/{id}', 'destroy')->name('destroy');
});

//Auth::routes();

Route::get('/oauth/{provider}/redirect', RedirectToProviderController::class)->name('oauth.redirect');
Route::get('/oauth/{provider}/callback', CallbackFromProviderController::class)->name('oauth.callback');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
