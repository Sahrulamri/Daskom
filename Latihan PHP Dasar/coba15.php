<!DOCTYPE html>
<html>

<head>
    <title>Operator Logika pada PHP</title>
</head>

<body>
    <h3>Saya sedang belajar Operator OR di PHP</h3>
    <?php
    // Jika keduanya benar 
    $x = 39;
    $y = 23;
    if ($x == 29 || $y == 23) { // TRUE 
        echo "1. Ini Benar";
    } else {
        echo "1. Ini Salah";
    }

    // Jika salah satu benar 
    echo "<br>";
    $a = 10;
    $b = 5;
    if ($a == 10 or $b == 3) { // TRUE 
        echo "2. Horeee...";
    } else {
        echo "2. Asikkkkk....";
    }

    // Jika keduanya salah 
    echo "<br>";
    $ca = 3;
    $da = 4;
    if ($ca == 2 or $da == 1) {  // FALSE 
        echo "3. Pagi";
    } else {
        echo "3. Siang";
    }
    ?>
</body>

</html>