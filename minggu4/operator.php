<?php
$a = 1;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan: $hasilTambah <br>";
echo "Hasil pengurangan: $hasilKurang <br>";
echo "Hasil kali: $hasilKali <br>";
echo "Hasil bagi: $hasilBagi <br>";
echo "Hasil sisa bagi: $sisaBagi <br>";
echo "Hasil pangkat: $pangkat <br>";

echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama: $hasilSama <br>";
echo "Hasil tidak sama: $hasilTidakSama <br>";
echo "Hasil lebih kecil: $hasilLebihKecil <br>";
echo "Hasil lebih besar: $hasilLebihBesar <br>";
echo "Hasil lebih kecil sama: $hasilLebihKecilSama <br>";
echo "Hasil lebih besar sama: $hasilLebihBesarSama <br>";

echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And: $hasilAnd <br>";
echo "Hasil Or: $hasilOr <br>";
echo "Hasil Not A: $hasilNotA <br>";
echo "Hasil Not B: $hasilNotB <br>";

echo "<br>";

$a += $b;
echo $a . "<br>";
$a -= $b;
echo $a . "<br>";
$a *= $b;
echo $a . "<br>";
$a /= $b;
echo $a . "<br>";
$a %= $b;
echo $a . "<br>";

echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: $hasilIdentik <br>";
echo "Hasil Tidak Identik: $hasilTidakIdentik <br>";

?>
