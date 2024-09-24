<?php
$harga = 120000;
$diskon = 0.2;

if ($harga > 100000) {
    $hargaDiskon = $harga * $diskon;
    $totalBeli = $harga - $hargaDiskon;
}

echo "Harga barang setelah diskon adalah $totalBeli";
echo "<br>";
?>