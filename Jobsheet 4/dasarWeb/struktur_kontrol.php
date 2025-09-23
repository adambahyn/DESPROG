<?php
$nilai_numerik = 92;

if ($nilai_numerik >= 90 && $nilai_numerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilai_numerik >= 80 && $nilai_numerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilai_numerik >= 70 && $nilai_numerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilai_numerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br><br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 50;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan {$hari} hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang dapat dihasilkan adalah {$jumlahBuah} buah.";

echo "<br><br>";

$skorUjian = [85,92,78,96,88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian: {$totalSkor}";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus)<br>";
}

echo "<br><br>";



$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$jumlah = 0;
foreach ($nilai as $n) {
    $jumlah++;
}

for ($i = 0; $i < $jumlah - 1; $i++) {
    for ($j = 0; $j < $jumlah - $i - 1; $j++) {
        if ($nilai[$j] > $nilai[$j + 1]) {
            $temp = $nilai[$j];
            $nilai[$j] = $nilai[$j + 1];
            $nilai[$j + 1] = $temp;
        }
    }
}

$total = 0;
for ($i = 2; $i < $jumlah - 2; $i++) {
    $total += $nilai[$i];
}

$rata2 = $total / ($jumlah - 4);

echo "Total nilai (setelah mengabaikan 2 tertinggi & 2 terendah): $total<br>";
echo "Rata-rata nilai: $rata2";

echo "<br><br>";

$harga = 120000;

$diskon = 0;

if ($harga > 100000) {
    $diskon = 0.20 * $harga; 
}

$total_bayar = $harga - $diskon;

echo "Harga asli: Rp " . $harga . "<br>";
echo "Diskon: Rp " . $diskon . "<br>";
echo "Total yang harus dibayar: Rp " . $total_bayar . "<br>";


echo "<br><br>";

$poin = 520; 
echo "Total skor pemain adalah: $poin<br>";
if ($poin > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>

