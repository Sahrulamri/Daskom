<!DOCTYPE html>
<html>

<head>
    <title>Operator Logika pada PHP</title>
</head>

<body>
    <h3>Saya sedang belajar Operator OR di PHP</h3>
    <?php
    // jika salah  --> jadi TRUE 
    $qw = 200;
    if ($qw !== 50) {
        echo "1. Heh...";  // [TRUE] 
    } else {
        echo "1. Hmmmm...";
    }

    echo "<br>";
    // jika benar --> jadi FALSE 
    $qa = 100;
    if ($qa !== 100) {
        echo "2. Windows...";
    } else {
        echo "2. Linux...."; // [FALSE] 
    }
    ?>
</body>

</html>