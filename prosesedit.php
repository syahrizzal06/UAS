<?php
include "koneksi.php";


		$ID = $_POST['idartikel'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$provinsi = $_POST['provinsi'];
		$email = $_POST['email'];
		$hp = $_POST['hp'];
		$ahli = $_POST['ahli'];
		


		$update="UPDATE covid  SET nama='$nama', alamat='$alamat', provinsi='$provinsi', email='$email', hp='$hp', ahli='$ahli' WHERE id='$ID'";
		
		$hasil=mysqli_query($koneksi,$update);

			if ($hasil) {
				header("location: index.php");
			} else {
				echo "Artikel gagal di update";
			}
?>


