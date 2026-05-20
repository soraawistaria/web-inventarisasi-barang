<?php
// 1. Hubungkan dengan file koneksi yang sudah kamu buat
include 'koneksi.php';

// 2. Cek apakah tombol submit sudah diklik
if (isset($_POST['submit'])) {
    
    // 3. Tampung data dari inputan form ke dalam variabel PHP
    $nama_produk = $_POST['nama_produk'];
    $stok        = $_POST['stok'];
    $harga       = $_POST['harga'];

    // 4. Logika untuk mengurus file gambar
    $nama_gambar = $_FILES['gambar']['name'];
    $tmp_file    = $_FILES['gambar']['tmp_name'];
    
    // Tentukan folder tempat menyimpan gambar (sesuaikan dengan nama folder gambar kamu, misal: 'gambar/')
    $folder_tujuan = "gambar/" . $nama_gambar;

    // 5. Pindahkan file gambar dari komputer ke folder project website
    if (move_uploaded_file($tmp_file, $folder_tujuan)) {
        
        // 6. Jalankan query SQL INSERT untuk memasukkan data ke database
        $query = "INSERT INTO produk (nama_produk, stok, harga, gambar) 
                VALUES ('$nama_produk', '$stok', '$harga', '$nama_gambar')";
        
        $simpan = mysqli_query($koneksi, $query);

        if ($simpan) {
            echo "<script>
                    alert('Produk berhasil ditambahkan!');
                    window.location='index.php'; // Otomatis balik ke halaman utama
                    </script>";
        } else {
            echo "<script>alert('Gagal menyimpan data ke database.');</script>";
        }
    } else {
        echo "<script>alert('Gagal mengunggah gambar.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Baru</title>
</head>
<body>
    <center>
    <form action="" method="POST" enctype="multipart/form-data">
        
        <label>Gambar produk :</label>
        <input type="file" name="gambar" required><br><br>

        <label>Nama Produk :</label>
        <input type="text" name="nama_produk" required><br><br>

        <label>Total produk :</label>
        <input type="number" name="stok" required><br><br>

        <label>Harga satuan :</label>
        <input type="number" name="harga" placeholder="1000" required><br><br>

        <button type="submit" name="submit">Tambahkan</button>
    </form>
    </center>
<script src="script.js"></script>
</body>
</html>