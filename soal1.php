<?php

// 1. Inisialisasi Variabel
$saldo_awal = 1000000;
$n_bulan = 12;
$biaya_admin = 9000;
$batas_bunga = 1100000;

// Saldo awal menjadi saldo saat ini
$saldo_sekarang = $saldo_awal;

// 2. Loop Perhitungan Saldo
for ($i = 1; $i <= $n_bulan; $i++) {
    
    // Tentukan suku bunga tahunan
    if ($saldo_sekarang < $batas_bunga) {
        $bunga_pa = 0.03; // 3%
    } else {
        $bunga_pa = 0.04; // 4%
    }
    
    // Hitung bunga bulanan (Bunga Tahunan / 12)
    $bunga_bulanan = $saldo_sekarang * ($bunga_pa / 12);
    
    // Update Saldo: Tambah Bunga, Kurangi Administrasi
    $saldo_sekarang += $bunga_bulanan;
    $saldo_sekarang -= $biaya_admin;
}

// 3. Tampilkan Saldo Akhir
// Menggunakan number_format untuk format Rupiah
$saldo_akhir_rupiah = number_format($saldo_sekarang, 2, ',', '.');

echo "<h2>Hasil Perhitungan Saldo Tabungan</h2>";
echo "Saldo Awal: Rp. " . number_format($saldo_awal, 0, ',', '.') . ",-\n<br>";
echo "Jangka Waktu: $n_bulan bulan\n<br>";
echo "<br>";
echo "Saldo Akhir setelah $n_bulan bulan: <strong>Rp. " . $saldo_akhir_rupiah . ",-</strong>";

?>