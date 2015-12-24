<?php
	$id = $_GET['id'];
	
	$query_string = "delete from buku where id = $id";
	$query = mysqli_query($koneksi, $query_string);
	if($query) {
		echo 	"<script>
					alert('Berhasil dihapus!')
				</script>";
		header('location:index.php?madyan_go=edit');
	} else {
		echo 	"<script>
					alert('Proses hapus gagal')
				</script>";
	}