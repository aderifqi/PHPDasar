<!DOCTYPE html>
<html lang="en">
    <head>    
        <meta charset="UTF-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <meta http-equiv="X-UA-Compatible" content="ie=edge">    
        <title>String PHP</title>
    </head>
    <body>  
        <h1>Latihan Dasar Pemograman dengan PHP</h1>
        <?php
        echo '<h3>Variabel di php</h3>'; 
        //echo '<br>';
        echo 'Variabel bisa di deklarasi dengan di mulai "$", contoh $hello="Hello PHP", untuk menampilkannya kita bisa menggunakan perintah "echo". contoh : ';
        echo '<br>';
        echo '<br>';
        echo '$hello = "Hello PHP!";';
        echo '<br>';
        $hello = "Hello PHP!" ;
        echo 'echo $hello;';
        echo $hello;

        echo '<br>';

        echo '<h3>String Di PHP</h3>';

        echo 'Untuk menggabungkan dua variable yang tipe datanya string kita bisa menggunakan ".", contoh :';
        echo '<br>';
        echo '$kata1 = "Hello"; ';
        $kata1 = "Hello";
        echo '<br>';
        echo '$kata2 = "PHP!";';
        $kata2 = "PHP!";
        echo '<br>';
        echo 'echo $kata1 . $kata2;';
        echo '<br>';
        echo $kata1 . ' ' . $kata2;
        ?>
    </body>
</html>
