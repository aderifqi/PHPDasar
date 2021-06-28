<?php
// 
$servername = "localhost";
$username = "ad";
$password = "password";
$db = "myDB";

try {
  // connect to database if exist
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  try{
    // create 
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db = "`".str_replace("`","``",$db)."`";
    $sql = "CREATE DATABASE" .  $db;
    // use exec() because no results are returned
    $conn->query($sql);
    //echo "Database created successfully<br>";
    $conn->query("use $db");
  }catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
  }
}

try{
  $sql = "SELECT * FROM mahasiswa";
  $mahasiswa = $conn->query($sql);
} catch(PDOException $e){
  try{
    // membuat tabel mahasiswa
    $sql = "CREATE TABLE IF NOT EXISTS mahasiswa (
      npm varchar(10) NOT NULL,
      nama varchar(50) NOT NULL,
      alamat varchar(100) NOT NULL,
      PRIMARY KEY (npm)
    )";
    $conn->exec($sql);
    echo "Tabel mahasiswa berhasil di buat";

  } catch(PDOException $e){
      echo $sql . "<br>". $e->getMessage(); 
  }
} catch(PDOException $e){
    echo "<br>" . $sql . "<br>". $e->getMessage(); 
}


// Add Data
function addData($data){
  global $conn;
  try{
    $nama   =htmlspecialchars($_POST['nama']);
    $alamat =htmlspecialchars($_POST['alamat']);
    $npm    =htmlspecialchars($_POST['npm']);

    $query = "INSERT INTO mahasiswa ( nama, alamat, npm) VALUES (
      '$nama', '$alamat', '$npm'
    )";
    $conn->exec($query);
  } catch(PDOException $e) {
    return 0;
  }
  return 1;
}

// Delete Data

function delete($npm){
  global $conn;
  $npm = $_GET['npm'];
  $query = "DELETE FROM mahasiswa WHERE npm=$npm";
  try{
    $conn->exec($query);
  }catch(PDOException $e){
    return 0;
  }
  return 1;
}

// Updata Data

function updateData($data){
  global $conn;
  try{
    $nama   =htmlspecialchars($_POST['nama']);
    $alamat =htmlspecialchars($_POST['alamat']);
    $npm    =htmlspecialchars($_POST['npm']);

    $query = "UPDATE mahasiswa SET 
                nama = $nama,
                alamat = $alamat,
                npm = $npm ";
    $conn->exec($query);
  } catch(PDOException $e) {
    return 0;
  }
  return 1;
}

?> 


