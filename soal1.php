<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php fakhri</title>
</head>
<body>
   <h1>Perhitungan PHP</h1>
    <?php
        $a = 5;
        $b = 9;
        $c = 2;
        $d = 1;
        $e = 1;

        $hasil = (($a + $b) / ($c * $d)) - $e;
    ?>

  <p>Nilai variabel:</p>
  <ul>
    <li>a = <?php echo $a; ?></li>
    <li>b = <?php echo $b; ?></li>
    <li>c = <?php echo $c; ?></li>
    <li>d = <?php echo $d; ?></li>
    <li>e = <?php echo $e; ?></li>
  </ul>

  <p>Hasil perhitungan:</p>
  <p><?php echo "((a + b) / (c * d)) - e = $hasil;"?></p>
</body>
</html>