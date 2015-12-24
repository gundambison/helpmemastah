<a href="index.php?madyan_go=add"><input type="button" value="ADD"></a>
<table border=1>
	<tr>
		<th>No.</th>
		<th>Judul</th>
		<th>Penerbit</th>
		<th>Tahun Terbit</th>
		<th>Action</th>
	</tr>
	<?php
		$no = 1;
		$query_string = 'select id, judul, penerbit, thn_terbit from buku';
		$query = mysqli_query($koneksi, $query_string);
		//$rows = mysqli_num_rows($query);
		while($data = mysqli_fetch_array($query)){ ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['judul']; ?></td>
				<td><?php echo $data['penerbit']; ?></td>
				<td><?php echo $data['thn_terbit']; ?></td>
				<td><a href = 'index.php?madyan_go=update&id=<?php echo $data['id']; ?>'>Edit</a> | <a href = 'index.php?madyan_go=delete&id=<?php echo $data['id'] ?>'>Delete</a></td>
			</tr>
		<?php
			$no++;
		}
	?>
</table>