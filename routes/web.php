<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function ()
{
    Route::get('/', [MainController::class, "index"])->name('admin.index');
});

Route::get('/', function () {
    return view('base');
});


Route::get('/windows', function () {
   return view('home');
});

