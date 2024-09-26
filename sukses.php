<?php
  $base_url = 'http://localhost/simkbs/';
  include 'app/koneksi.php';

  $sql_profil = "SELECT * FROM tabel_control WHERE id=1";
  $result_profil = $mysqli->query($sql_profil);
  $row_profil = $result_profil->fetch_object();
  include 'views/layout/user/header.php';
  
//   sleep(3);
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
            <div class="pt-5" style="min-height: 629px;">
                <div class="container">
                <div class="text-center">
                    <img src="<?= $base_url; ?>asset_user/img/logo-puti.png" alt="logo" width="5%">
                    <h2>Pendaftaran Bansos</h2>
                    <h4>SUKSES.....!!!!</h4>
                    <!-- pencarian -->
                </div>

                    <div class="row justify-content-center">
                        <div class="col-md-6 align-items-center text-center">
                            <img src="asset_user/img/berhasil.png" alt="" class="img-fluid" width="50%">
                            
                            <h4 style="font-size: 1.4rem;">Data Berhasil Disimpan</h4>
                            <a href="beranda" class="btn btn-sm text-light" style="background-color: #042165;">
                                <span class="fas fa-arrow-alt-circle-left"></span> Kembali ke Home</a>
                        </div>
                    </div>

                </div>
            </div>
<?php 

// header("Location: beranda");?>
</main>

