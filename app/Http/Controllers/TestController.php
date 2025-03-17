<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function welcome(){
        return "tampilan splash screen berisi judul aplikasi, nama developer, dan logo aplikasi";
    }

    function menu($type) {
        if ($type == "dinein") {
            return "Daftar menu dine-in";
        } else if ($type == "takeaway") {
            return "Daftar menu take-away";
        } else {
            return "Tipe menu tidak ditemukan";
        }
    }

    function beforeOrder(){
        return "Pilih dine in atau take away";
    }

    function admin($type){
        if ($type == "categories") {
            return "Portal management: daftar kategori";
        } else if ($type == "orders") {
            return "Portal management: daftar order";
        } else {
            return "Portal management: daftar member";
        }
    }
}
