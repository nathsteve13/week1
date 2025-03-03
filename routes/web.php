<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return "Selamat datang";
});

Route::get('/before_order', function () {
    return "Pilih dine in atau take away";
});

Route::get('/menu/dinein', function () {
    return "Daftar menu dine-in";
});

Route::get('/menu/takeaway', function () {
    return "Daftar menu take-away";
});

Route::get('/admin/categories', function () {
    return "Portal management: daftar kategori";
});

Route::get('/admin/orders', function () {
    return "Portal management: daftar order";
});

Route::get('/admin/member', function () {
    return "Portal management: daftar member";
});