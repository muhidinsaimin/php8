<?php
$hasil = "A";
switch ($hasil) {
    case 'A':
        echo "Nilai Anda $hasil, Anda Istimewa";
        break;
    case 'B':
        echo "Nilai Anda $hasil, Anda Baik";
        break;
    case 'C':
        echo "Nilai Anda $hasil, Anda Cukup";
        break;
    case 'D':
        echo "Nilai Anda $hasil, Anda Kurang";
        break;    
    default:
        echo "Tidak ada ketentuan seperti ini";
        break;
}