<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    
</head>
<body>
    <h1>Belajar PHP</h1>
    
    <?php
    print "<h1>StudentDay Web Programming</h1>";
    print '<h1>StudentDay Web Programming</h1>';

    // Belajar variabel
    $nama = "Muhidin Saimin";
    $angka1 = 25;
    $angka2 = 29.25;
    
    define("PI", 22/7);

    print "Nama Saya $nama<br>";
    echo 'Nama Saya $nama ' . $nama;
    echo "<hr>";
    
    $nama = "Pratama Putra";
    echo $nama;
    echo "<br>";
    echo PI;
    define("pi", 3.14);
    echo "<br>";
    echo pi;

    ?>

</body>
</html>