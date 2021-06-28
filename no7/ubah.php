<?php 
require 'function.php';

$npm = $_GET["npm"];

$sql = "SELECT * FROM mahasiswa WHERE npm = $npm";
$row = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);

if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( updateData($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
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
  <h3>Ubah Data</h3>
  <form action="" method="POST">
    <label for="npm">Npm</label>
    <input type="text" id="npm" name="npm" value="<?= $row['npm'] ?>">
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" value="<?= $row['nama'] ?>">
    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat" value="<?= $row['alamat'] ?>">
    <button type="submit" name="submit">Tambah Data</button>
  </form>
</body>
</html>
