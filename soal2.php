<?php

echo "<h2>Pencarian Pasangan Bilangan Asli (x, y, z)</h2>";
echo "<h3>Persamaan: x + y + z = 25</h3>";
echo "<pre>"; // Gunakan <pre> agar tampilan baris baru dan spasi terjaga
$target = 25;
$jumlah_penyelesaian = 0;

// Batas minimum bilangan asli
$min_val = 1;

// Loop untuk x
// x maksimal adalah 25 - 1 - 1 = 23
for ($x = $min_val; $x <= $target - 2; $x++) {
    
    // Loop untuk y
    // y minimal 1. y maksimal adalah 25 - x - 1
    $y_max = $target - $x - $min_val;
    for ($y = $min_val; $y <= $y_max; $y++) {
        
        // Hitung z
        // z harus memenuhi z = 25 - x - y
        $z = $target - $x - $y;
        
        // Karena loop y sudah membatasi nilai maksimum agar z minimal 1,
        // kita hanya perlu memastikan z adalah bilangan asli (z >= 1), 
        // yang secara otomatis terpenuhi.
        
        if ($z >= $min_val) {
            // Pasangan ditemukan
            echo "x = " . $x . ", y = " . $y . ", z = " . $z . "\n";
            $jumlah_penyelesaian++;
        }
    }
}

echo "\n-------------------------------\n";
echo "Jumlah penyelesaian : " . $jumlah_penyelesaian;
echo "</pre>";

?>