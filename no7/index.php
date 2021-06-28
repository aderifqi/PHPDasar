<?php 
require 'function.php';
$input= 'submit';
$readonly = false;
if (isset($_GET["npm"])){
  $npm = $_GET["npm"];

  $sql = "SELECT * FROM mahasiswa WHERE npm = $npm";
  $row = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
  $input = 'update';
  $readonly = true;
}
if(isset($_POST["submit"])){
  // cek apakah data berhasil di tambahkan atau tidak
  if( addData($_POST) > 0 ) {
    echo "
      <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  }
}elseif(isset($_POST["update"])){
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
<style>
a{
  text-decoration: none;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Data Mahasiswa</h2>

  <form action="" method="POST">
    <label for="npm">Npm</label>
    <input type="text" id="npm" name="npm" value="<?= (isset($row)) ? $row['npm'] : ''; ?>" <?= ($readonly) ? 'readonly' : ''; ?> >
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" value="<?= (isset($row)) ? $row['nama'] : ''; ?>">
    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat" value="<?= (isset($row)) ? $row['alamat'] : ''; ?>">
    <button type="submit" name="<?= $input ?>">Submit</button>
  </form>
<br>

<table>
  <tr>
    <th>NO</th>
    <th>NPM</th>
    <th>NAMA</th>
    <th>ALAMAT</th>
    <th>AKSI</th>
  </tr>
  <?php $i = 1 ?>
  <?php foreach( $mahasiswa as $mhs ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $mhs["npm"]; ?></td>
		<td><?= $mhs["nama"]; ?></td>
		<td><?= $mhs["alamat"]; ?></td>
    <td>
        <button><a href="hapus.php?npm=<?= $mhs["npm"]; ?>" onclick="return confirm('yakin?');">Hapus</a></button>
        <button><a href="index.php?npm=<?= $mhs["npm"]; ?>">Ubah</a></button>
    </td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
</body>
</html>
