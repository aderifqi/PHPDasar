<?php 
if(isset($_GET['hari'])){
    $hari = '';
    $tampil = '';
    // jika hari di submit
    if(isset($_GET['hari'])){
        $hari =  $_GET['hari'];
    }
    if($hari === "jumat" or $hari === 'jum\'at'){
        $tampil='belajar setengan hari ';
    }elseif($hari == "sabtu" or $hari == "minggu"){
        $tampil='Akhir Pekan';
    }elseif($hari == "senin" or $hari == "selasa" or $hari == "rabu" or $hari == "kamis"){
        $tampil='Hari Belajar';
    }else{
        $tampil='masukkan hari dari senin - sabtu';
    }

}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Conditional Statements, if, else, elseif in PHP</h1>
    <form  method="get">
        Masukkan Hari: <input type="text" name="hari">
        <button>submit</button>
    </form>
<br>
<br>
    <?= $tampil ?>
</body>
</html>
