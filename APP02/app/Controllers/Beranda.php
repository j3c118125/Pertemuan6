<?php
namespace App\Controllers;
// artinya ada class base controller di folder app trs masuk folder controller

class Beranda extends BaseController {
    
    public function index() {
        echo view('header_v');
        echo view('beranda_v');
        echo view('footer_v');
        // return view ('beranda_v'); //kl mau hanya 1 view menggunakan return, kl mau lebih dr 1 view pake echo
    }
}