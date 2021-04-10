
<?php 	
	include 'koneksi.php';
	

	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$provinsi = $_POST['provinsi'];
	$email = $_POST['email'];
	$hp = $_POST['hp'];
	$ahli = $_POST['ahli'];



	$query = mysqli_query($koneksi, "INSERT INTO covid VALUES('','$nama', '$alamat', '$provinsi', '$email', '$hp', '$ahli')") or die (mysqli_error($koneksi,$query));

	if ($query) {
		header("location: index.php");
			}else{
		echo "<h2 align=center>Proses Penginputan gagal</h2>";
	}
 ?>
