<?php 
// 1. Hubungkan dengan file koneksi
include 'koneksi.php'; 

// 2. Ambil semua data dari tabel produk
$ambil_data = mysqli_query($koneksi, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css?v=1">
    <title align="center">Website Warung Permai</title>
</head>
<body>
    <header class="header">
        <h1>WARUNG PERMAI</h1>
        <div class="bagian-atas">
            <div class="pem-peng">
                <p>Pemasukan</p>
                <p id="uangmasuk">Rp0,-</p>
            </div>
            <div id="rekap">
                <a href="rekap.html">
                    Rekap Penjualan
                </a>
            </div>
            <div class="pem-peng">
                <p>Pengeluaran</p>
                <p id="uangkeluar">Rp0,-</p>
            </div>
        </div>

        <div class="bag-tengah">
            <div class="pp-terbaru">
                Pemasukan terbaru
                <div class="keg-terbaru" id="div-barang-terjual">
                    <p id="barang-terjual">Rinso cair</p>
                </div>
            </div>
            <div class="pp-terbaru">
                Pengeluaran terbaru
                <div class="keg-terbaru" id="div-barang-restock">
                    <p id="barang-restock">Dancow sachet</p>
                </div>
            </div>
        </div>
        <div class="bag-tengah2">
            <div id="mencari">
                Cari produk : <input type="search" placeholder="Mie">
            </div>
            <div id="tmbhbrg">
                <a href="tambahkanbarang.php">Tambahkan barang</a>
            </div>
        </div>
    </header>

<br><br>

        <!-- Tampilan Katalog -->
    <main class="katalogs">
        <?php 
        // Perulangan akan berjalan otomatis sebanyak jumlah baris data di database
        while($row = mysqli_fetch_assoc($ambil_data)) { 
        ?>
            
            <div class="katalog">
                <a href="produk.php?id=<?php echo $row['id']; ?>">
                    <img src="gambar/<?php echo $row['gambar']; ?>" alt=""><br>
                    <?php echo $row['nama_produk']; ?>
                </a>
                <p>Rp <?php echo number_format($row['harga']); ?>,-</p>
                <p>Stok: <?php echo $row['stok']; ?></p>
            </div>

        <?php 
        } 
        ?>
    </main>
    <footer class="footer">
        <div id="footer">
            <p>Website by Amalia Soraya (2510817120002)</p>
        </div>
    </footer>
<script src="script.js"></script>
</body>
</html>