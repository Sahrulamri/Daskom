<!DOCTYPE html>
<html>

<head>
    <title>Operator Comparison PHP</title>
</head>

<body>
    <h2>Saya sedang belajar Operator Comparison/Perbandingan PHP</h2>
    <?php
    echo "1.Sama dengan (==)";
    echo "<hr>";
    $a = 10;
    $b = 10;
    // Sama dengan (==)  
    echo "If (" . $a . " == " . $b . ")  = ";
    if ($a == $b) {
        echo 'Benar';  //  variabel  $a  memiliki  nilai  yang  sama  dengan  variabel  $b hasil benar
    } else {
        echo 'Salah';
    }
    echo "<br><br>";
    echo "2.Identik dengan (===)";
    echo "<hr>";
    $a = 10;
    $b = 10;
    // Identik dengan (===)  
    echo "If (" . $a . " === " . $b . ") = ";
    if ($a === $b) {
        echo  'Benar';  //variabel  $a  indentik  dengan  variabel  $b  sehingga  menghasilkan nilai Benar
    } else {
        echo 'Salah';
    }
    echo "<br><br>";
    echo "3.Tidak sama dengan (!=)";
    echo "<hr>";
    $a = 10;
    $b = 10;
    // Identik dengan (!=)  
    echo "If (" . $a . " != " . $b . ") = ";
    if ($a != $b) {
        echo 'Benar';
    } else {
        echo 'Salah'; //nilai Salah, karena variabel $a dan $b memiliki nilai yang sama. 
    }
    echo "<br><br>";
    echo "4.Tidak identik dengan (!==)";
    echo "<hr>";
    $a = 10;
    $b = 10;
    // Identik dengan (!==)  
    echo "If (" . $a . " !== " . $b . ") = ";
    if ($a != $b) {
        echo 'Benar';
    } else {
        echo 'Salah'; //nilai salah, karena variabel $a dan $b memiliki tipe data yang sama. 
    }
    echo "<br><br>";
    echo "5.Kurang Dari (<)";
    echo "<hr>";
    $a = 5;
    $b = 10;
    // Kurang Dari (<)  
    echo "If (" . $a . " < " . $b . ") = ";
    if ($a < $b) {
        echo  'Benar';  //  Nilai  Benar,  ,  karena  nilai  yang  terdapat  pada  variabel  $a  lebih kecil dari yang terdapat pada variabel $b. 

    } else {
        echo 'Salah';
    }
    echo "<br><br>";
    echo "6.Lebih Dari (>)";
    echo "<hr>";
    $a = 10;
    $b = 5;
    // Lebih Dari (>)  
    echo "If (" . $a . " > " . $b . ") = ";
    if ($a > $b) {
        echo  'Benar';  //  Nilai  Benar,  ,  karena  nilai  yang  terdapat  pada  variabel  $a  lebih kecil dari yang terdapat pada variabel $b. 

    } else {
        echo 'Salah';
    }
    echo "<br><br>";
    echo "7.Kurang dari atau sama dengan (<=)";
    echo "<hr>";
    $a = 5;
    $b = 10;
    // Kurang dari atau sama dengan (<=) 
    echo "If (" . $a . " <= " . $b . ") = ";
    if ($a <= $b) {
        echo  'Benar';  //  Nilai  Benar,  ,  karena  nilai  yang  terdapat  pada  variabel  $a  lebih kecil dari yang terdapat pada variabel $b. 

    } else {
        echo 'Salah';
    }
    echo "<br><br>";
    echo "8.Lebih dari atau sama dengan (>=)";
    echo "<hr>";
    $a = 10;
    $b = 5;
    // Lebih dari atau sama dengan (>=) 
    echo "If (" . $a . " >= " . $b . ") = ";
    if ($a >= $b) {
        echo 'Benar'; //   
    } else {
        echo 'Salah';
    }
    ?>
</body>

</html>