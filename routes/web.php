<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\obatController;
use App\Http\Controllers\produkController;
use App\Models\User;
use GuzzleHttp\Middleware;


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

route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/informasi',[DashboardController::class,'informasi'])->name('informasi');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,pengguna']], function()
{
    route::get('/home',[DashboardController::class,'index'])->name('dashboard');
});

//Route::get('/kelolaproduk', [DashboardController::class, 'kelola'])->name('kelola');
Route::resource('/kelolaproduk', 'App\Http\Controllers\obatController');
route::get('/produk', 'App\Http\Controllers\produkController@index');
route::get('/produk-kategori/{kategori}', 'App\Http\Controllers\produkController@obat_kategori')->name('tampilan.produk');