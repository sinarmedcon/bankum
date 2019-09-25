<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">


    <!-- favicion -->
    <link rel="shortcut icon" href="<?= base_url();?>assets/image/31.png">

    <!-- blogger sans -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/BloggerSans.css">

    <style type="text/css" media="screen">
        body { font-size:18px; font-family: "BloggerSans", Georgia; }
        .big { font-size:25px;}
    </style>

    <title><?= $title;?></title>
  </head>
  <body>

  <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
    <div class="container">

        <a class="navbar-brand" href="<?= base_url();?>"><img src="<?= base_url();?>assets/image/logo.png" width="120" height="40"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active ml-3 mr-3" href="<?= base_url();?>">Home <span class="sr-only">(current)</span></a>

            <div class="nav-item dropdown">
                <button class="btn btn-default nav-link dropdown-toggle" type="button" data-toggle="dropdown">
                    Layanan
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">Bantuan Hukum Gratis</button>
                    <button class="dropdown-item" type="button">Bantuan Pengacara</button>
                    <button class="dropdown-item" type="button">Bantuan Legalitas</button>
                    <button class="dropdown-item" type="button">Bantuan Konsultasi</button>
                    <button class="dropdown-item" type="button">Bantuan Polisi</button>
                    <button class="dropdown-item" type="button">Bantuan Donasi</button>
                    <button class="dropdown-item" type="button">Pendidikan & Pelatihan</button>
                    <button class="dropdown-item" type="button">Bantuan Seminar</button>
                </div>
            </div>

            <div class="nav-item dropdown">
                <button class="btn btn-default nav-link dropdown-toggle" type="button" data-toggle="dropdown">UU & Peraturan
                <span class="caret"></span></button>
                <ul class="dropdown-menu dropdown-menu-lg-right">
                    <li class="dropdown-submenu dropright">
                        <button class="test dropdown-toggle btn btn-white" tabindex="-1" href="#" id="ln">Lembaran Negara<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-lg-right mr-12" aria-labelledby="dropdownMenu2" id="ln-list">
                            <li><a href="#" class="dropdown-item">Undang-Undang</a></li>
                            <li><a href="#" class="dropdown-item">PERPU</a></li>
                            <li><a href="#" class="dropdown-item">Peraturan Pemerintah</a></li>
                            <li><a href="#" class="dropdown-item">Peraturan Presiden</a></li>
                            <li><a href="#" class="dropdown-item">Peraturan BPK</a></li>
                            <li><a href="#" class="dropdown-item">Peraturan Bank Indonesia</a></li>
                            <li><a href="#" class="dropdown-item">Otoritas Jasa Keuangan</a></li>
                        </ul>

                        <button class="test dropdown-toggle btn btn-white" tabindex="-1" href="#" id="bn">Berita Negara<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-lg-right mr-12" aria-labelledby="dropdownMenu2" id="bn-list">
                            <li><a href="#" class="dropdown-item">Peraturan Menteri</a></li>
                            <li><a href="#" class="dropdown-item">Peraturan LPNK</a></li>
                        </ul>

                        <button class="test dropdown-toggle btn btn-white" tabindex="-1" href="#" id="pl">Peraturan Lain-lain<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-lg-right mr-12" aria-labelledby="dropdownMenu2" id="pl-list">
                            <li><a href="#" class="dropdown-item">Undang-Undang Dasar</a></li>
                            <li><a href="#" class="dropdown-item">Tap MPR</a></li>
                            <li><a href="#" class="dropdown-item">Peraturan Daerah</a></li>
                            <li><a href="#" class="dropdown-item">Peraturan Kolonial</a></li>
                            <li><a href="#" class="dropdown-item">Undang-Undang Dasar Sementara</a></li>
                            <li><a href="#" class="dropdown-item">Undang-Undang Darurat</a></li>
                            <li><a href="#" class="dropdown-item">Penetapan Presiden</a></li>
                            <li><a href="#" class="dropdown-item">Keputusan Presiden</a></li>
                            <li><a href="#" class="dropdown-item">Instruksi Presiden</a></li>
                        </ul>

                        <button class="test dropdown-toggle btn btn-white" tabindex="-1" href="#" id="pu">Putusan / Uji Materi<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-lg-right mr-12" aria-labelledby="dropdownMenu2" id="pu-list">
                            <li><a href="#" class="dropdown-item">Uji Materi Mahkamah Konstitusi</a></li>
                            <li><a href="#" class="dropdown-item">Uji Materi Mahkamah Agung</a></li>
                        </ul>

                        <button class="test dropdown-toggle btn btn-white" tabindex="-1" href="#" id="kh">Kitab Hukum<span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-lg-right mr-12" aria-labelledby="dropdownMenu2" id="kh-list">
                            <li><a href="#" class="dropdown-item">KUH Pidana</a></li>
                            <li><a href="#" class="dropdown-item">KUH Perdata</a></li>
                            <li><a href="#" class="dropdown-item">KUH Acara Pidana</a></li>
                            <li><a href="#" class="dropdown-item">KUH Dagang</a></li>
                        </ul>

                    </li>
                </ul>
            </div>

            <a class="nav-item nav-link ml-3 mr-3" href="#">Blog</a>
            <a class="nav-item nav-link ml-3 mr-3" href="#">Bantuan</a>
            <a class="nav-item nav-link ml-3 mr-3" href="#">Gabung</a>

            

    </div>
</nav>

<script src="<?= base_url();?>assets/js/jquery.js"></script>

<script>
$(document).ready(function(){
  $('#ln').on("mouseover", function(e){
    $('#ln-list').toggle();
    $('#bn-list').hide();
    $('#pl-list').hide();
    $('#pu-list').hide();
    $('#kh-list').hide();
    e.stopPropagation();
    e.preventDefault();
  });

  $('#bn').on("mouseover", function(e){
    $('#ln-list').hide();
    $('#bn-list').toggle();
    $('#pl-list').hide();
    $('#pu-list').hide();
    $('#kh-list').hide();
    e.stopPropagation();
    e.preventDefault();
  });

  $('#pl').on("mouseover", function(e){
    $('#ln-list').hide();
    $('#bn-list').hide();
    $('#pl-list').toggle();
    $('#pu-list').hide();
    $('#kh-list').hide();
    e.stopPropagation();
    e.preventDefault();
  });

  $('#pu').on("mouseover", function(e){
    $('#ln-list').hide();
    $('#bn-list').hide();
    $('#pl-list').hide();
    $('#pu-list').toggle();
    $('#kh-list').hide();
    e.stopPropagation();
    e.preventDefault();
  });

  $('#kh').on("mouseover", function(e){
    $('#ln-list').hide();
    $('#bn-list').hide();
    $('#pl-list').hide();
    $('#pu-list').hide();
    $('#kh-list').toggle();
    e.stopPropagation();
    e.preventDefault();
  });

});
</script>

<script src="<?= base_url();?>assets/js/api.js"></script>