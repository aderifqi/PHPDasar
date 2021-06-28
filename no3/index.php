<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Operator Di PHP</h1>
<h3>Operator Aritmatika</h3>
<ul>
    <li><?= 'Operetor  tambah (+)' ?></li>
    <?php 
        echo 'a = 5;';
        $a = 5;
        echo '<br>';
        echo 'b = 10;';
        $b = 10;
        echo '<br>';
        echo 'a + b = ' . $a + $b;
    ?>
    
    <li><?= 'Operetor kurang (-)' ?></li>
    <?php 
        echo 'a = 5';
        $a = 5;
        echo '<br>';
        echo 'b = 10';
        $b = 10;
        echo '<br>';
        echo 'a - b = ' . $a - $b;
    ?>
    <li><?= 'Operetor kali (*)' ?></li>
    <?php 
        echo 'a = 5';
        $a = 5;
        echo '<br>';
        echo 'b = 10';
        $b = 10;
        echo '<br>';
        echo 'a * b = ' . $a * $b;
    ?>
    <li><?= 'Operetor bagi (/)' ?></li>
    <?php 
        echo 'a = 5';
        $a = 5;
        echo '<br>';
        echo 'b = 10';
        $b = 10;
        echo '<br>';
        echo 'a / b = ' . $a / $b;
    ?>
    <li><?= 'Operetor modulus (%)' ?></li>
    <?php 
        echo 'a = 5';
        $a = 5;
        echo '<br>';
        echo 'b = 10';
        $b = 10;
        echo '<br>';
        echo 'a % b = ' . $a % $b;
    ?>
    <li><?= 'Operetor pangkat (**)' ?></li>
    <?php 
        echo 'a = 5';
        $a = 5;
        echo '<br>';
        echo 'b = 10';
        $b = 2;
        echo '<br>';
        echo 'a ** b = ' . $a ** $b;
    ?>
</ul>

<h3>Operator Perbandingan</h3>
<ul>
    <li><?= 'Operetor  sama dengan (==)' ?></li>
    <?php 
        echo 'a = 5;';
        $a = 5;
        echo '<br>';
        echo 'b = 10;';
        $b = 10;
        echo '<br>';
        echo 'mengembalikan nilai boolean ';
        echo 'a == b  ';
        var_dump( $a == $b);
    ?>
    <li><?= 'Operetor  tidak sama dengan (!=)' ?></li>
    <?php 
        echo 'a = 5;';
        $a = 5;
        echo '<br>';
        echo 'b = 10;';
        $b = 10;
        echo '<br>';
        echo 'mengembalikan nilai boolean ';
        echo 'a != b  ';
        var_dump( $a != $b);
    ?>
</ul>
</body>
</html>
