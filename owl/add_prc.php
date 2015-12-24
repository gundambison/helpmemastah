<?php
	$judul = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['tahun'];
	$query_string = "insert into buku (judul, penerbit, thn_terbit) values ('$judul', '$penerbit', '$tahun')";
	$query = mysqli_query($koneksi, $query_string);
	if($query) { 
		echo 	"<script>
					window.alert('Sukses');
					window.location.href='location:index.php?madyan_go=edit';
				</script>";
	} else {
		echo 	"<script>
					window.alert('Gagal tambah data');
				</script>";
		$lokasi = 'location:index.php?madyan_go=edit';
		header($lokasi);
	}