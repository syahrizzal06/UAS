<?php include 'koneksi.php'; ?>
<?php include 'validasi.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Data Relawan Covid-19</title>
	    <link rel="stylesheet" href="style.css">
	<style type="text/css">
		blockquote {
				font: 2em/1em 'Open Sans', sans-serif;
				-webkit-text-stroke: 1px black;
				text-shadow: 2px 2px #000;
				margin: 20px 0 15px 0;
				color: #fff;
		}
		*{
  				margin: 0;
  				padding: 0;
  				box-sizing: border-box;
  				outline: none;
				font-family: 'Josefin Sans', sans-serif;
			}


		#container { 
				width:500px; 
				margin:50px auto; 
				border:0px solid #555; 
				box-shadow:0px 0px 2px #555; 
			}

		input[type="text"]{}
		input[type="text"], input[type=date], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; width:450px;}
		input[type="submit"], input[type="reset"] { padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }

		  h1 {
		    text-align: center;
		    margin-top: 50px;
			padding: 20px;
		  }
		  form {  
		    background-color: #fffdf3;
		    padding: 25px;
		    border-radius: 10px;
			background-color: beige;
		  }
		

		</style>
</head>
<body>

<div id="container" >
<center><blockquote>Input Data Relawan Covid-19</blockquote></center>
		
		<form action="proses.php" method="post">
			<p>
				<b>Nama :</b><br>
				<input type="text" name="nama"/>
			</p>
			<p>
				<b>Alamat :</b><br>
				<input type="text" name="alamat"/>
			</p>


			<p>
				<b>Provinsi :</b><br>
				<form action="" method="POST">
					<select name="provinsi">
		  				<option>-- PILIH PROVINSI --</option>
					<?php 
						$sql = mysqli_query($koneksi,"SELECT * from provinsi ");
						while($data = mysqli_fetch_array($sql)) :?>
						<option><?= $data['provinsi']; ?></option>
						<?php endwhile ?>
				</form>
			</select>
			</p>
			<p>
				<b>Email :</b><br>
				<input type="text" name="email"/>
			</p>
			<p>
				<b>No Hp :</b><br>
				<input type="text" name="hp"/>
			</p>
			<p>
				<b>Keahlian :</b><br>
				<input type="text" name="ahli"/>
			</p>
			<p>
				<input type="submit" name="submit" value="Add" class="tombol"/> 
			   	<input type="reset" name="batal" value="Reset" class="tombol"/>
			</p>
		</form>
	</div>
</body>

</html>