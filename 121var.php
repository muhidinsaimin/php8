<?php
echo "<h3>Belajar Variabel</h3>";
$a1 = 9;
$a2 = 6;
echo "$a1 + $a2 = " . ($a1 + $a2) . "<br>";
echo "$a1 - $a2 = " . ($a1 - $a2) . "<br>";
echo "$a1 x $a2 = " . ($a1 * $a2) . "<br>";
echo "$a1 : $a2 = " . ($a1 / $a2) . "<br>";
echo "$a1 % $a2 = " . ($a1 % $a2) . "<hr>";


# inisiasi dan inisialisasi variabel
echo "<h3>Data Integer</h3>";
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

# Tampilkan data dengan perintah echo
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

# mengetahui tipe data dari variabel
var_dump($e);

echo "<h3>Data Float</h3>";
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

# hitung nilai rata-rata
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

# Tampilkan data

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

# lihat tipe data dari variabel $rataRata
var_dump($rataRata);

echo "<h3>Data Boolean</h3>";
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "<h3>Data String</h3>";
$namaDepan = "Muhidin"; # pakai tanda petik dua
$namaBelakang = 'Saimin'; # pakai tanda petik satu

# menggabungkan dua variabel dengan tanda
# petik dua
$namaLengkap = "{$namaDepan} {$namaBelakang}";

# anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

# [Tampilkan Data]
# kita bisa memasukkan variabel lain jika menggunakan tanda petik dua
echo "Nama Depan: {$namaDepan} <br>"; 
# ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel 
# di dalam string akan tetapi menggabungkannya dengan operator titik (.)
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;

echo "<h3>Data Array</h3>";
$siswa = ["ADHINDA FADHILAH DINATA", 'AFIF ZIDAN AKBAR', "AHMAD ROOJA RAIHAN", "AIDA RAHMA SUBIYANTORO"];
echo $siswa[2];
echo "<br>";
print_r($siswa);

echo "<br>";
$studentDay = array("Jurnalistik", "Pemrograman Web", "Pemrograman Mobile", "Pemrograman Desktop");
print $studentDay[2];
echo "<br>";
var_dump($studentDay);