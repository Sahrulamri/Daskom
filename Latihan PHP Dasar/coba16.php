<!DOCTYPE html>
<html>

<head>
    <title>Operator Logika pada PHP</title>
</head>

<body>
    <h3>Saya sedang belajar Operator XOR di PHP</h3>
    <?php
    // Jika Benar Semua 
    $cf = 100;
    $cv = 30;
    if ($cf == 100 xor $cv == 30) {
        echo "1. Aku";
    } else {
        echo "1. Kamu";
    }

    // Jika 1 benar dan 1 salah 
    echo "<br>";
    $gf = 34;
    $gh = 23;
    if ($gf == 34 xor $gh == 3) {
        echo "2. Isyana";
    } else {
        echo "2. Raisa";
    }

    // Jika Semua SALAH 
    echo "<br>";
    $xw = 2;
    $xc = 4;
    if ($xw == 45 xor $xc == 24) {
        echo "3. Sayang";
    } else {
        echo "3. Cinta";
    }
    ?>
</body>

</html>