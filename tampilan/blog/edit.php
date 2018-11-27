<?php 
$hasil = $koneksi->prepare("SELECT * FROM blog WHERE `No` = '".get('No')."'");
$hasil->execute();
$data = $hasil->fetch(PDO::FETCH_ASSOC);
 ?>
 <form method="POST" action="proses/blog/update.php"
	enctype="multipart/form-data">
		<input type="hidden" name="No" value="<?php echo $data['No']; ?>">
		<table>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="Judul" value="<?php echo $data['Judul']; ?>"></td>
			</tr>
			<tr>
				<td>Konten</td>
				<td><input type="text" name="Konten" value="<?php echo $data['Konten']; ?>"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td><input type="text" name="Penulis" value="<?php echo $data['Penulis']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Update</button></td>
			</tr>
		</table>
	</form>