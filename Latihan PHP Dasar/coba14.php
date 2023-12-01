<!DOCTYPE html>
<html>

<head>
    <title>Operator Logika pada PHP</title>
</head>

<body>
    <h3>Saya sedang belajar Operator AND di PHP</h3>
    <?php
    // Jika Keduanya Benar 
    $X = 100;
    $Y = 200;
    if ($X == 100 and $Y == 200) { // TRUE 
        echo "1. Tutorial Belajar PHP"; // jika true  [masuk disini] 
    } else {
        echo "1. No Komen"; // jika false 
    }

    // Jika 1 benar dan 1 salah 
    echo "<br>";
    $a = 20;
    $b = 40;
    if ($a == 20 && $b == 10) { // FALSE 
        echo "2. Top"; // jika true 
    } else {
        echo "2. Down"; // jika false [masuk disini] 
    }

    //Jika keduanya Salah 
    echo "<br>";
    $er = 10;
    $ew = 20;
    if ($er == 2 and $ew == 3) { // FALSE 
        echo "3. PHP";
    } else {
        echo "3. Java";
    }
    ?>
</body>

</html>