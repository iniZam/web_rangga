<?php
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
    ?>
    
<?php
        header("Location: search?nik=".$nik);
 
    
    
} else {
    echo "Tidak ada file yang diunggah atau terjadi kesalahan.";
}
?>
