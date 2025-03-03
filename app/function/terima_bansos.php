<?php 
    $mysqli = new mysqli("localhost", "root", "", "desa");
    $nik= $_POST['nik']; 
    $nama= $_POST['nama']; 
    $jenis_bansos=$_POST['jenis_bantuan'];

    
    

    if ($mysqli->connect_error) {
        die("Koneksi gagal: " . $mysqli->connect_error);
    }

    
    $nik = $_POST['nik'];  // Ambil data dari form input

    // Cek apakah data dengan NIK tersebut sudah ada di dalam database
    
     $sql2 = "UPDATE tabel_kependudukan SET status_bantuan='diambil' WHERE nik=$nik";
     $sql = "INSERT INTO bansos_diambil (NIK, nama, jenis_bantuan) VALUES ('$nik','$nama','$jenis_bansos')";
    //  $sql = "INSERT INTO bansos_diambil (nama, NIK, jenis_bantuan)  VALUES ('$nama','$nik',$jenis_bantuan)";
     if ($mysqli->query($sql2) === TRUE  && $mysqli->query($sql) === TRUE ) {?>
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