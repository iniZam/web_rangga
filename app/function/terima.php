<?php 
    $mysqli = new mysqli("localhost", "root", "", "desa");
    $nik= $_POST['nik']; 
    $nama= $_POST['nama']; 
    $alamat= $_POST['alamat']; 
    $ttl= $_POST['ttl']; 
    $agama= $_POST['agama']; 
    $pekerjaan= $_POST['pekerjaan']; 
    $jenis_bansos=$_POST['jenis_bansos'];

    if ($mysqli->connect_error) {
        die("Koneksi gagal: " . $mysqli->connect_error);
    }

    
    $nik = $_POST['nik'];  // Ambil data dari form input

    // Cek apakah data dengan NIK tersebut sudah ada di dalam database
    
     $sql2 = "UPDATE tabel_kependudukan SET status_bantuan='diterima',jenis_bantuan='$jenis_bansos'  WHERE nik=$nik";
     
     
     if ($mysqli->query($sql2) === TRUE  ) {?>
     <script>
         alert("BERHASIL'");
         document.location.href = 'data_klasifikasi_bantuan';
     </script>
             <?php
         } else {
             echo "Error: " . $sql2 . "<br>" . $mysqli->error;
         }
        
        ?>
            
        <?php
        
    
     
    //  $sql = "INSERT INTO tabel_kependudukan (NIK, NAMA_LGKP, alamat) VALUES ('$nik','$nama', '$alamat')";
    //  // Eksekusi query
    //  
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>jadi</h1>
</body>
</html>