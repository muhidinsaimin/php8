<?php
echo "<h2>Array 2 Dimensi</h2>";
$nama = [
    ["Joko", "Jurnalistik", "Laki-laki", 16],
    ["Hamidah", "Programming", "Perempuan", 17],
    ["Ayu", "Sekretaris", "Perempuan", 16],
];
var_dump($nama);
echo "<br>";
echo $nama[1][1];

echo "<h2>Array 2 Dimensi - Array Assosiatif</h2>";
$nilai = [
    "Jessica" => [
        "Matematika" => 80,
        "PPKn" => 75,
        "Fisika" => 85,
    ],
    "Fairuz" => [
        "Matematika" => 85,
        "PPKn" => 85,
        "Fisika" => 80,
    ],
    "Jorel" => [
        "Matematika" => 90,
        "PPKn" => 70,
        "Fisika" => 80,
    ],
];
var_dump($nilai);
echo "<br>";
echo $nilai["Fairuz"]["PPKn"];
echo "<br>";
echo '<pre>' . var_export($nilai, true) . '</pre>';