<table border=1>
	<tr>
		<th>No.</th>
		<th>Judul</th>
		<th>Penerbit</th>
		<th>Tahun Terbit</th>
	</tr>
	<?php
		$no = 1;
		$query_string = 'select judul, penerbit, thn_terbit from buku';
		$query = mysqli_query($koneksi, $query_string);
		while($data = mysqli_fetch_array($query)){ ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['judul']; ?></td>
				<td><?php echo $data['penerbit']; ?></td>
				<td><?php echo $data['thn_terbit']; ?></td>
			</tr>
		<?php 
		$no++;
		}
	?>
</table>