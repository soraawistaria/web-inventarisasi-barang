// // 1. Tentukan nominal awal pemasukan
// let totalPemasukan = 0;

// // 2. Ambil elemen teks RpXXX tersebut berdasarkan ID-nya
// const tombolPemasukan = document.getElementById('uangmasuk');

// // 3. Jalankan fungsi ini setiap kali teks tersebut diklik
// tombolPemasukan.addEventListener('click', function() {
//     // Tambah nilai total sebanyak 1000
//     totalPemasukan += 1000;
    
//     // Update teks di HTML dengan format Rupiah (.toLocaleString agar ada titik ribuan)
//     tombolPemasukan.innerText = "Rp" + totalPemasukan.toLocaleString('id-ID') + ",-";
// });

// let totalPengeluaran = 0;
// const tombolPengeluaran = document.getElementById('uangkeluar');

// tombolPengeluaran.addEventListener('click', function() {
//     totalPengeluaran += 500;
//     tombolPengeluaran.innerText = "Rp" + totalPengeluaran.toLocaleString('id-ID') + ",-";
// });