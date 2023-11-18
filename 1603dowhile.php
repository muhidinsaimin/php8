<?php
$a = 1;
do {
    echo "$a. Belajar Programming Itu Menyenangkan<br>";
    $a++;
} while ($a <= 10);
// buat bilangan ganjil dan genap dengan increment dan decrement

echo "<h1>Bilangan Ganjil - Increment</h1>";
$b = 1;
do {
    echo "$b<br>";
    $b=$b+2;
} while ($b <= 10);

echo "<h1>Bilangan Genap - Decrement</h1>";
$b = 15;
do {
    echo "$b<br>";
    $b=$b-2;
} while ($b > 0);