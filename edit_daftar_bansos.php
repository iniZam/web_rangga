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
  <?php 
                
                
                
                $nik= $_POST['nik']; 
                $nama= $_POST['nama']; 
                $alamat= $_POST['alamat']; 
                if(isset($_POST['aksi'])) {
                  if($_POST['aksi'] == 'simpan') {
                    
                    $sql = "INSERT INTO tabel_daftar_bansos (NIK, nama, alamat) VALUES ('$nik','$nama', '$alamat')";
                    // $query = $mysqli->query("SELECT * FROM tabel_kependudukan JOIN tabel_konsumsi ON tabel_kependudukan.NIK = tabel_konsumsi.NIK JOIN tabel_pekerjaan ON tabel_pekerjaan.NIK = tabel_kependudukan.NIK JOIN tabel_pendidikan ON tabel_pendidikan.NIK = tabel_kependudukan.NIK JOIN tabel_rumah ON tabel_rumah.NIK = tabel_kependudukan.NIK JOIN tabel_tabungan ON tabel_tabungan.NIK = tabel_kependudukan.NIK WHERE tabel_kependudukan.HBKEL = '1' AND bantuan='0' AND LUAS_LANTAI = '1' AND () AND () AND FASILITAS_BAB = '0' AND SUMBER_PENERANGAN ='0' AND (SUMBER_AIR_MINUM = 'Sungai' OR SUMBER_AIR_MINUM = 'Mata Air Tidak Terlindung' OR SUMBER_AIR_MINUM = 'Air Hujan') AND (BAHAN_BAKAR_MEMASAK = 'Kayu Bakar' OR BAHAN_BAKAR_MEMASAK = 'Minyak Tanah') AND FREKUENSI_PER_MINGGU <= 1 AND PAKAIAN_PER_TAHUN <= 1 AND MAKAN_PER_HARI <= 2 AND BIAYA_PENGOBATAN = '0' AND PENGHASILAN_PER_BULAN < 600000 AND (PENDIDIKAN_TERAKHIR ='Tidak Tamat SD' OR PENDIDIKAN_TERAKHIR ='Tidak Sekolah' OR PENDIDIKAN_TERAKHIR ='SD dan Sederajat') AND (KEPEMILIKAN_TABUNGAN = '0' OR (KEPEMILIKAN_TABUNGAN = '1' AND (JENIS_TABUNGAN = '1' OR JENIS_TABUNGAN = '2' OR JENIS_TABUNGAN = '3' OR JENIS_TABUNGAN = '4' OR JENIS_TABUNGAN = '5') AND HARGA < 500000))");

                    // $sql = "UPDATE tabel_konsumsi SET BAHAN_MAKANAN='0', FREKUENSI_PER_MINGGU='0', PAKAIAN_PER_TAHUN='0', MAKAN_PERHARI='0', BIAYA_PENGOATAN='0' WHERE nik=$nik";
                    // $sql1= "UPDATE tabel_rumah SET luas_lantai='0', JENIS_LANTAI ='Bambu' OR JENIS_LANTAI ='Kayu/Papan',JENIS_DINDING ='Bambu' OR JENIS_DINDING ='Rumbia' OR JENIS_DINDING ='Tembok Tanpa Di Plester' WHERE nik=$nik";
                    // Eksekusi query
                    if ($mysqli->query($sql) === TRUE) {
                        header("Location: sukses");
                    } else {
                        echo "Error: " . $sql . "<br>" . $mysqli->error;
                    }
                    
                    $mysqli->close();
                  } else if($_POST['aksi'] == 'edit') {
            ?>         
            <div class="pt-5" style="min-height: 629px;">
              <div class="container">
                <div class="text-center">
                  <img src="<?= $base_url; ?>asset_user/img/logo-puti.png" alt="logo" width="5%">
                  <h2>Informasi penerima bansos</h2>
                  <h4>Edit Data</h4>
                 
                </div>
                <form action="ocr/simpan_pendaftar.php" method='post'>
                <div class="mb-9">
                  <label for="exampleFormControlInput1" class="form-label">NIK</label>
                  <input name='nik' type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $nik; ?>">
                </div>
                <br>
                <div class="mb-9">
                  <label for="exampleFormControlInput1" class="form-label">Nama</label>
                  <input name='nama' type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $nama; ?>">
                </div>
                <br>
                <div class="mb-9">
                  <label for="exampleFormControlInput1" class="form-label">alamat</label>
                  <input name='alamat' type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $alamat; ?>">
                </div>

               <br><br>
                <div class="col-4">
                    <button class="btn btn-primary" role="button" href="">Simpan</button>                                   
                                                                          
                  </div>
                  </form>
                </div>
            </div>
<?php 
}
}
// header("Location: beranda");?>
</main>

