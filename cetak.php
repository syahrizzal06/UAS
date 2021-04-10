<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA RELAWAN COVID</title>
</head>
<body>
 
	<center>
 
		<h2>CETAK DATA RELAWAN COVID</h2>
		<h4>KELOMPOK 2</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">id</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Provinsi</th>
            <th>Email</th>
            <th>HP</th>
            <th>Ahli</th>
            
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from covid");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
            <td><?= $data['nama'];?></td>
		 		<td><?= $data['alamat'];?></td>
		 		<td><?= $data['provinsi'];?></td>
		 		<td><?= $data['email'];?></td>
				 <td><?= $data['hp'];?></td>
				 <td><?= $data['ahli'];?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>