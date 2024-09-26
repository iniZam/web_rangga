<?php
  $base_url = 'http://localhost/simkbs/';
 
  include 'views/layout/user/header.php';

  if (isset($_FILES['ktp']) && $_FILES['ktp']['error'] === UPLOAD_ERR_OK) {
    // Path sementara untuk file gambar
    $fileTmpPath = $_FILES['ktp']['tmp_name'];
    $fileName = $_FILES['ktp']['name'];

    // Inisialisasi CURL untuk mengirim gambar ke API Flask
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost:5000/ocr');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);

    // Mengunggah file gambar
    $cfile = new CURLFile($fileTmpPath, $_FILES['ktp']['type'], $fileName);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ['image' => $cfile]);

    // Eksekusi CURL dan dapatkan respons dari API
    $response = curl_exec($ch);
    curl_close($ch);

   

    // Decode JSON response
    $responseData = json_decode($response, true);
    $nik = $responseData['nik'];
    $alamat = $responseData['alamat'];
    $text = $responseData['text'];
    $nama = "";

    $pattern = '/Nama.*?Tem/i';
    preg_match_all($pattern, $text, $matches);
    // $data = json_encode(['nik' => $nik, 'nama' => $nama, 'alamat' => $alamat]);


    include 'app/koneksi.php';
    $sql_check = "SELECT * FROM tabel_kependudukan WHERE nik = '$nik'";
    $result = $mysqli->query($sql_check);
    if ($result->num_rows > 0) {

    
   
  
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
                    <h2>Informasi penerima bansos</h2>
                    <h4>Harap Kembali Periksa Data Anda</h4>
                    <!-- pencarian -->
                </div>
            </div>

            <section class="content">
                <form action="edit_daftar_bansos.php" class="row g-3 needs-validation" novalidate method="post">
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">NIK</label>                    
                    <input name='nik' class="form-control" type="text" value="<?php echo $nik; ?>" aria-label="readonly input example" readonly>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Nama</label>  
                    <?php  if (!empty($matches[0])) {
                          $kata_yang_dihapus = "\bNama\b";
                          $kata_yang_dihapus2 = "\bTem\b";
                          foreach ($matches[0] as $match) {                  
                            $teks_baru = preg_replace("/$kata_yang_dihapus/", "", $match);
                            $teks_baru2 = preg_replace("/$kata_yang_dihapus2/", "", $teks_baru);
                            ?>
                    <input name='nama' class="form-control" type="text" value="<?php echo $teks_baru2;}} ?>" aria-label="readonly input example" readonly>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">alamat</label>
                    <input class="form-control" name='alamat' type="text" value="<?php echo $alamat; ?>" aria-label="readonly input example" readonly>             
                  </div>
                  
                  <div class="col-4">
                    <button class="btn btn-primary" name="aksi" role="button"  value="simpan">Simpan </button>                                   
                    <button class="btn btn-warning" name="aksi" role="button" value="edit">edit</button>                                                       
                  </div>
                </form>
              </section>
          </div>
      </div>
</main>
<?php 

}
else{
 echo "tidak ada"; 
}
}
else {
  echo "Tidak ada file yang diunggah atau terjadi kesalahan.";
}
?>
<script>
    
</script>

