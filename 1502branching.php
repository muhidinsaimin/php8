<?php
# IF 1 variabel
$hari = "Cerah";
if ($hari == "Hujan") {
    echo "Saya bawa payung";
}
echo "<hr>";

## IF dengan 2 variabel
if ($hari == "Hujan") {
    echo "saya bawa payung";
} else {
    echo "saya tidak bawa payung";
}
echo "<hr>";

/*
Buat If dengan 2 variable yang mengatakan Anda Lulus atau Anda Tidak lulus jika nilai yang didapat adalah >= 75
75 s/d 100 = lulus
0 s/d 74 = tidak lulus
*/
$nilai = 74;
if ($nilai >= 75 AND $nilai <= 100) {
    echo "Nilai Anda $nilai, Anda <b>Lulus</b>";
} elseif ($nilai >= 0 && $nilai < 75) {
    echo "Nilai Anda $nilai, Anda <b>Belum Lulus</b>";
} else {
    echo "Nilai Anda $nilai, Tidak ada ketentuan nilai seperti ini";
}
echo "<hr>";

# 4 variabel
if ($nilai >= 91 AND $nilai <= 100) :
    echo "Nilai Anda $nilai, nilai Anda A";
elseif ($nilai >= 83 AND $nilai < 91) :
    echo "Nilai Anda $nilai, nilai Anda B";
elseif ($nilai >= 75 AND $nilai < 83) :
    echo "Nilai Anda $nilai, nilai Anda C";
elseif ($nilai >= 0 AND $nilai < 75) :
    echo "Nilai Anda $nilai, nilai Anda D";
else :
    echo "Nilai Anda $nilai, Tidak Penilaian Seperti ini";
endif;
echo "<hr>";

# A = Istimewa
$hasil = "A";
if ($hasil == "A") :
    echo "Istimewa";
elseif ($hasil == "B") :
    echo "Baik";
elseif ($hasil == "C") :
    echo "C";
elseif($hasil == "D") :
    echo "Kurang";
else :
    echo "Tidak ada ketentuan seperti ini";
endif;