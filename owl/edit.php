<?php
	$id = $_GET['id'];
	$query_string = "select judul, penerbit, thn_terbit from buku where id = $id";
	$query = mysqli_query($koneksi, $query_string);
	$select = mysqli_fetch_array($query);
?>
<form action = "index.php?madyan_go=doupdate" method = 'post'>
	<input type='hidden' name='id' value='<?php echo $id;?>'>
	<table align='center'>
		<tr>
			<td>Judul Buku</td>
			<td>:</td>
			<td><input type='textfield' name='judul' placeholder='Input judul buku' value="<?php echo $select['judul']; ?>"></td>
		</tr>
		<tr>
			<td>Penerbit Buku</td>
			<td>:</td>
			<td><input type='textfield' name='penerbit' placeholder='Input penerbit buku' value="<?php echo $select['penerbit'];?>"></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td>:</td>
			<td><input type='textfield' name='tahun' placeholder='Input tahun terbit' value="<?php echo $select['thn_terbit'];?>"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type='submit' value='Update' name='submit'></td>
		</tr>
	</table>
</form>