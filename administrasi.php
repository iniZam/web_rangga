<?php
  $base_url = 'http://localhost/simkbs/';
  include 'app/koneksi.php';

  $sql_profil = "SELECT * FROM tabel_control WHERE id=1";
  $result_profil = $mysqli->query($sql_profil);
  $row_profil = $result_profil->fetch_object();
  include 'views/layout/user/header.php';
?>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1 class="text-light">
                <a href="beranda">
                    <img src="<?= $base_url; ?>asset_user/img/logo-puti.png" alt="logo">
                    <small>DESA DARPAN</small>
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
               <li><a class="nav-link scrollto active" href="beranda">Beranda</a></li>
                <li><a class="nav-link scrollto" href="administrasi">Daftar Bansos</a></li>
                <li><a class="nav-link scrollto" href="beranda">Cek Status Bansos</a></li>
                <li><a class="nav-link scrollto" href="beranda">Demografi Penduduk</a></li>               
                <li><a class="nav-link scrollto" href="beranda">Kontak</a></li>
                <li><a class="getstarted scrollto" href="login">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">
    <div class="pt-3" style="min-height: 629px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center">
                    <img src="<?= $base_url; ?>asset_user/img/logo-puti.png" alt="logo" width="5%">
                    <h4>Masukan Data Pengajuan Bansos</h4>
                    <!-- pencarian -->
                </div>
            </div>

            <section class="content">
                <form action="daftar_bansos" method="POST" enctype="multipart/form-data">  
                    <div class="card mt-3">
                        <div class="card-header" style="background-color: #042165;">
                            <h3 class="card-title text-white">Data Pengajuan</h3>
                        </div>
                        
                            <br> <h3>Upload KTP Anda di Sini</h3>
                            <input type="file" name="ktp" id="ktp" accept="image/*" required class="form-control me-2">
                            <button class="btn text-light me-2"  type="submit" style="background-color: #042165;">Proses Dokumen</button>
                        
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>

<?php

?>