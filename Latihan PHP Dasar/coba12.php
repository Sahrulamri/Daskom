<!DOCTYPE html>
<html>

<head>
    <title>Operator Penugasan PHP</title>
</head>

<body>
    <h2>Saya sedang belajar Operator Penugasan PHP</h2>
    <?php
    echo "Pengisian Nilai<br>";
    echo "<hr>";
    $x = 10;
    // Pengisian Nilai 
    echo "Nilai x = $x";
    echo "<hr>";
    echo "<br>";
    echo "Pengisian dan Penambahan dengan Nilai 20<br>";
    // Pengisian dan Penambahan Nilai 20 
    echo "<hr>";
    $x += 20;
    echo "Nilai x += $x";
    echo "<hr>";
    echo "<br>";
    echo "Pengisian dan Pengurangan dengan Nilai 20<br>";
    // Pengisian dan Pengurangan 
    echo "<hr>";
    $x -= 20;
    echo "Nilai x -= $x";
    echo "<hr>";
    echo "<br>";
    echo "Pengisian dan Perkalian dengan Nilai 20<br>";
    // Pengisian dan Perkalian 
    echo "<hr>";
    $x *= 20;
    echo "Nilai x *= $x";
    echo "<hr>";
    echo "<br>";
    echo "Pengisian dan Pembagian dengan Nilai 20<br>";
    // Pengisian dan Pembagian 
    echo "<hr>";
    $x /= 20;
    echo "Nilai x /= $x";
    echo "<hr>";
    echo "<br>";
    echo "Pengisian dan Sisa Bagi dengan Nilai 3<br>";
    // Pengisian dan Sisa Bagi 
    echo "<hr>";
    $x %= 3;
    echo "Nilai x %= $x";
    echo "<hr>";
    echo "<br>";
    echo "Pengisian dan Penggabungan (string)";
    // Pengisian dan Penggabungan (string) 
    echo "<hr>";
    $txt1 = "Hello";
    $txt2 = " world!";
    echo "txt1 = $txt1";
    echo "<br>";
    echo "txt2 = $txt2";
    echo "<br>";
    $txt1 .= $txt2;
    echo "txt1 .= txt2";
    echo "<br>";
    echo "txt1 = $txt1";
    echo "<br>";
    echo $txt1;
    echo "<hr>";
    echo "<br>";
    ?>
</body>

</html>