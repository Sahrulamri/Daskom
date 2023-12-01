<?php 
 $d = date("D"); 
 if ($d == "Sun")  
     echo "Hari Minggu!"; 
 elseif ($d < "Mon")  
  echo "Hari Senin!"; 
 else  
  echo "Bukan Hari Minggu/Senin!";
?>