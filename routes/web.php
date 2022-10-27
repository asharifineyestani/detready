<?php

use Illuminate\Support\Facades\Route;

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



/*
|--------------------------------------------------------------------------
| Dev Routes
|--------------------------------------------------------------------------
|
*/

Route::group([
    'prefix' => 'dev',
    'middleware' => ['web']
], function ($router) {
    require base_path('routes/dev.php');
});
