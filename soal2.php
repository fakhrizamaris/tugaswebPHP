<!DOCTYPE html>
<html lang="id">
<head>
  <title>php2 fakhri</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Perhitungan PHP</h1>
  <div class="php">
    <?php
    $a = 6;
    $b = 1;

    echo "Penjumlahan dan Pengurangan: " . "<br>";
    echo "$a + $b = " . ($a + $b) . "<br>";
    echo "$a - $b = " . ($a - $b) . "<br><br>";

    echo "Perkalian: " . "<br>";
    echo "6 * 2 = " .(6*2) . "<br>";
    echo "6 * 2.5 = " .(6*2.5) . "<br><br>";
    
    echo "Pembagian: " . "<br>";
    echo "6 / 4 = " .(6/4) . "<br>";
    echo "6 / 4.0 = " .(6/4.0) . "<br><br>";
    
    echo "Sisa Bagi: " . "<br>";
    echo "6 % 5 = " .(6%5) . "<br>";
    echo "6 % 4 = " .(6%4) . "<br>";
    echo "6 % 3 = " .(6%3) . "<br><br>";

    ?> 
  </div>
  
      
</body>
</html>