<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author">
    <meta name="description">
    <meta name="keyword">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

    <title>IPB University</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"> <!-- bg-light jd warna navbar nya putih, kl bg-primary jdnya biru -->
    <div class="container">
        <a class="navbar-brand" href="#">IPB University</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> <!-- span class="navbar-toggler-icon", fungsi button ini ketika di minimize jd ada garis 3 trs dikotakin gt buat nampilin menu-nya -->
        </button> <!-- nah kalo mau diganti jadi fa fa-user dari navbar-toggle-icon, fa itu fontawesome, fa fa-user itu ntr jadi ada gambar orangnya -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto"> <!-- ini yg ngebuat si menu yg diatas kek home dll itu ada di pojok kiri, mr itu margin right. nah makanya ganti jd ml-auto yg tdnya mr-auto biar posisinya di pojok kanan, ml = margin left -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('Beranda'); ?>">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Program_Studi'); ?>">Program Studi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Mahasiswa'); ?>">Mahasiswa</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Master
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('Agama'); ?>">Agama</a>
                        <a class="dropdown-item" href="<?php echo site_url('Hobi'); ?>">Hobi</a>
                        <!--div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a-->
                    </div>
                </li>
                <!--li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li-->
            </ul>
            <!--
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            -->
        </div>
    </div>
 </nav>