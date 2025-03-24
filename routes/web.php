<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', [TestController::class, 'welcome'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});


    // Route::get('/user/{id?}', function ($id = "") {
    //     if ($id == "") {
    //         return "No ID";
    //     } else {
    //         return "ID: " . $id;
    //     }   
    // });

    // Route::get("/{tokoId}/{barangId}", function ($tokoId, $barangId) {
    //     return "Toko ID: " . $tokoId . " Barang ID: " . $barangId;
    // });

Route::get('/register', function () {
    return "halaman register";
});

Route::get('/search', function () {
    return "halaman search";
});


Route::get('/before_order', [TestController::class, 'beforeOrder'])->name('beforeOrder');

Route::get('/menu/{type}', [TestController::class, 'menu'])->name('menu');

Route::get('/admin/{type}', [TestController::class, 'admin'])->name('admin');

Route::resource('/categories', CategoryController::class);
Route::resource('/foods', FoodController::class);

Route::get('category/totalfood', [CategoryController::class, 'showTotalFood'])->name('category.totalfood');

Route::get('/test_query', [TestController::class, 'testQuery'])->name('testQuery');

Route::get('/dashboard', [TestController::class, 'dashboard'])->name('dashboard');