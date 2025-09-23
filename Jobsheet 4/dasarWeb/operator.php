<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "a + b = " , $hasilTambah;
echo "<br>" ;
echo "a - b = " ,$hasilKurang;
echo "<br>" ;
echo "a * b = " ,$hasilKali;
echo "<br>" ;
echo "a / b = " ,$hasilBagi;
echo "<br>" ;
echo "a % b = " ,$sisaBagi;
echo "<br>" ;
echo "a ** b = " ,$pangkat;

echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>" ;
echo "a == b = " ,$hasilSama;
echo "<br>" ;
echo "a != b = " ,$hasilTidakSama;
echo "<br>" ;
echo "a < b = " ,$hasilLebihKecil;
echo "<br>" ;
echo "a > b = " ,$hasilLebihBesar;
echo "<br>" ;
echo "a <= b = " ,$hasilLebihKecilSama;
echo "<br>" ;
echo "a >= b = " ,$hasilLebihBesarSama;

echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>" ;
echo "a && b = " ,$hasilAnd;
echo "<br>" ;
echo "a || b = " ,$hasilOr;
echo "<br>" ;
echo "!a = " ,$hasilNotA;
echo "<br>" ;
echo "!b = " ,$hasilNotB;

echo "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a **= $b;
$a %= $b;

echo "<br>";
echo "a += b = " ,$a;
echo "<br>" ;
echo "a -= b = " ,$a;
echo "<br>" ;
echo "a *= b = " ,$a;
echo "<br>" ;
echo "a /= b = " ,$a;
echo "<br>" ;
echo "a **= b = " ,$a;
echo "<br>" ;
echo "a %= b = " ,$a;

echo "<br>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "a === b = " ,$hasilIdentik;
echo "<br>" ;
echo "a !== b = " ,$hasilTidakIdentik;

echo "<br>";

$Kursi = 45;
$ditempati = 28;
$sisa = 45 - 28;

echo "<br>";
echo "Kursi yang tersedia sebanyak: " , $Kursi;
echo "<br>" ;
echo "Kursi yang ditempati sebanyak: " , $ditempati;
echo "<br>" ;
echo "Sisa kursi yang tersedia sebanyak: " , $sisa;
?>