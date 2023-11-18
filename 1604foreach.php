<?php
// Digunakan pada Array
$siswa = ["Ahmad", "Muhidin", "Budi", "Cindy", "Deni", "Eka", "Farhan", "Gina", "Hadi", "Indah", "Bagas"];
// $siswa_sort = asort($siswa);
foreach ($siswa as $no =>$s) {
    echo ++$no . ". $s<br>";
}
// print_r($siswa)