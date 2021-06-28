<?php 
require  'function.php';

$npm = $_GET["npm"];

if( delete($npm) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
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

?>
