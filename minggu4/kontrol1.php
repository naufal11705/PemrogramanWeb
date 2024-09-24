<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;

sort($nilai);

for ($i = 0; $i < count($nilai); $i++) {
    if ($i > 2 && $i < (count($nilai) - 2)) {
        $totalNilai += $nilai[$i];
    }
}

$nilaiRataRata = $totalNilai / (count($nilai) - 4);
echo "Nilai rata-rata : $nilaiRataRata";
?>