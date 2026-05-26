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

