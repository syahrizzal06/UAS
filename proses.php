
<?php 	
    ob_start();
	include 'koneksi.php';
	

	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$provinsi = $_POST['provinsi'];
	$email = $_POST['email'];
	$hp = $_POST['hp'];
	$ahli = $_POST['ahli'];


    $sql="INSERT into covid (nama,alamat,provinsi,email,hp,ahli)values('$nama','$alamat','$provinsi','$email','$hp','$ahli')";
    $query = mysqli_query($koneksi,$sql)or die(mysqli_error());
    if ($query){
        header('Location: /index.php', true, 301);
    }else{
		echo "<h2 align=center>Proses Penginputan gagal</h2>";
	}
	ob_end_flush();
 ?>
