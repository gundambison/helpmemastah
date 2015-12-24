<?php
/**

**/
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
		$lokasi = 'location:index.php?madyan_go=edit';
		echo 	"<script>
					window.alert('Gagal tambah data');
					//window.location.href='location:index.php?madyan_go=edit';
				</script>";
		printf("Error: %s\n", mysqli_error($koneksi));

		//header($lokasi);
	}
