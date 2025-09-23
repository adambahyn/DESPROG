<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(", ", $nilaiLulus);

echo "<br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eve', 6],
];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] >= 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<br><br>";
echo "Daftar karyawan dengan pengalaman lebih dari 5 tahun: " . implode(", ", $karyawanPengalamanLimaTahun);

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' =>
        [
            ['Alice', 92],
            ['Bob', 80],
            ['Charlie', 85],
        ],
];

$mataKuliah = 'Fisika';

echo "<br><br>";
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br>";
}


echo "<br><br>";

$siswa = [
    ["nama" => "Alice", "nilai" => 85],
    ["nama" => "Bob", "nilai" => 92],
    ["nama" => "Charlie", "nilai" => 78],
    ["nama" => "David", "nilai" => 64],
    ["nama" => "Eva", "nilai" => 90]
];


$total = 0;
for ($i = 0; $i < 5; $i++) {
    $total += $siswa[$i]["nilai"];
}


$rata2 = $total / 5;

echo "Rata-rata kelas: $rata2 <br><br>";
echo "Siswa dengan nilai di atas rata-rata:<br>";


for ($i = 0; $i < 5; $i++) {
    if ($siswa[$i]["nilai"] > $rata2) {
        echo $siswa[$i]["nama"] . " : " . $siswa[$i]["nilai"] . "<br>";
    }
}


?>

