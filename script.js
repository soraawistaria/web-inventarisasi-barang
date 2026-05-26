let totalPemasukan = 0;

const tombolPemasukan = document.getElementById('uangmasuk');

tombolPemasukan.addEventListener('click', function() {
    totalPemasukan += 1000;
    
    tombolPemasukan.innerText = "Rp" + totalPemasukan.toLocaleString('id-ID') + ",-";
});

let totalPengeluaran = 0;
const tombolPengeluaran = document.getElementById('uangkeluar');

tombolPengeluaran.addEventListener('click', function() {
    totalPengeluaran += 500;
    tombolPengeluaran.innerText = "Rp" + totalPengeluaran.toLocaleString('id-ID') + ",-";
});

// 1. Definisikan list barang (Array)
const listBarangPemasukan = ["Beng Beng", "Ultramilk", "Teh Botol", "Aqua"];
const listBarangPengeluaran = ["Beli Indomie", "Bayar Listrik", "Isi Galon"];

// 2. Buat variabel untuk mencatat indeks item yang sedang aktif
let indeksPemasukan = 0;
let indeksPengeluaran = 0;

// 3. Ambil elemen HTML berdasarkan ID
const elemenBarangTerjual = document.getElementById("barang-terjual");
const elemenBarangRestock = document.getElementById("barang-restock");

const boxPemasukan = document.getElementById("div-barang-terjual");
const boxPengeluaran = document.getElementById("div-barang-restock");

// 4. Tambahkan fungsi klik untuk Pemasukan
boxPemasukan.addEventListener("click", function() {
    // Ganti teks dengan barang sesuai indeks saat ini
    elemenBarangTerjual.innerText = listBarangPemasukan[indeksPemasukan];
    
    // Naikkan indeks untuk klik berikutnya
    indeksPemasukan++;
    
    // Jika indeks sudah sama dengan panjang array, reset kembali ke 0
    if (indeksPemasukan >= listBarangPemasukan.length) {
        indeksPemasukan = 0;
    }
});

// 5. Tambahkan fungsi klik untuk Pengeluaran
boxPengeluaran.addEventListener("click", function() {
    // Ganti teks dengan barang sesuai indeks saat ini
    elemenBarangRestock.innerText = listBarangPengeluaran[indeksPengeluaran];
    
    // Naikkan indeks untuk klik berikutnya
    indeksPengeluaran++;
    
    // Reset ke 0 jika sudah di ujung list
    if (indeksPengeluaran >= listBarangPengeluaran.length) {
        indeksPengeluaran = 0;
    }
});