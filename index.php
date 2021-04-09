<?php include 'koneksi.php'; ?>
<?php include 'validasi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Shade|Covered+By+Your+Grace" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Data Relawan Covid-19</title>
</head>
<style>
		#partyTimeButton {
		background-color: #222;
		width: 60px;
		font-family: 'Bungee', cursive;
		font-size: 13px;
		color: #fff;
		border: none;
		border-radius: 50px;
		padding: 10px 0;
		margin-top: 20px;
		}

		blockquote {
		font: 2em/1em 'Open Sans', sans-serif;
		-webkit-text-stroke: 1px black;
		text-shadow: 2px 2px #000;
		margin: 0px 0 10px 0;
		color: #fff;
		}		
		h4 {
			font-size: 40px;
			font-family: 'Bungee', cursive;
			margin-bottom: 20px;
			margin-top: 10px;
		}
            h1, h2, h3, h6 {
            font-family: 'Bungee Shade', cursive;
            margin-top: 0px;
        }
	*{
  				margin: 0;
  				padding: 0;
  				box-sizing: border-box;
  				outline: none;
				font-family: 'Josefin Sans';
			}
	.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
    background: whitesmoke;
	}
</style>
<body style="text-align: center;">

</div>
	<div class="container" style="margin-top: 20px;">
	<blockquote>Data Relawan Covid19 wilayah DKI Jakarta</blockquote>
	<blockquote> Per <?php 
        echo date('d-F-Y')." ";
        echo date('H:i:s e');?></blockquote>		
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Id</th>
				<th scope="col">nama</th>
				<th scope="col">alamat</th>
				<th scope="col">provinsi</th>
				<th scope="col">email</th>
				<th scope="col">hp</th>
				<th scope="col">ahli</th>
				<th scope="col">action</th>
			</tr>
		</thead>
		
		<?php 
		// perintah query untuk menampilkan / mengambil data dari database
		$query = mysqli_query($koneksi, "SELECT * from covid  ORDER BY id desc");
	
		// while digunakan untuk id / no yang menggunakan tipe data int auto increment
		$no = 0;
		while ($data = mysqli_fetch_array($query)) {
			$no++
		 ?>
		 <tbody>
		 	<tr>
		 		<!-- perintah untuk menampilkan data yang sudah diambil dari database ke browser html -->
		 		<th scope="row"><?= $no; ?></th>
		 		<td><?= $data['nama'];?></td>
		 		<td><?= $data['alamat'];?></td>
		 		<td><?= $data['provinsi'];?></td>
		 		<td><?= $data['email'];?></td>
				 <td><?= $data['hp'];?></td>
				 <td><?= $data['ahli'];?></td>
		 		<td>
		 			<a href="edit.php?id=<?= $data['id']?>" class="btn btn-primary">Edit</a>
		 			<a href="delete.php?id=<?= $data['id']?>" class="btn btn-danger" >Delete</a>
		 		</td>
		 	</tr>
		 </tbody>
		<?php } ?>
	</table>
	<a href="input.php" class="btn" id="partyTimeButton">input</a>
	<a href="cetak.php" class="btn" id="partyTimeButton">Cetak</a>
	<a href="logout.php" class="btn" id="partyTimeButton">logout</a>
	
</div>
</body>
</html>
