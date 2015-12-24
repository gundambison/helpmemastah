<?php
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['tahun'];
	
	$query_string = "update buku set judul = '$judul', penerbit = '$penerbit', thn_terbit = '$tahun' where id = $id";
	$query = mysqli_query($koneksi, $query_string);
	if($query){
		echo 	"<script>
				window.alert('Telah di update!');
				</script>";
		header('location:index.php?madyan_go=edit');
	} else {
		echo 	"<script>
				window.alert('Terjadi kesalahan');
				</script>";
	}
