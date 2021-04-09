<?php  include 'validasi.php'; ?>
<?php 
	include 'koneksi.php';
	
	$idArtikel = $_GET['id'];
	
	$query = mysqli_query($koneksi,"DELETE FROM covid WHERE id='$idArtikel'");
	
	header('location: index.php');

 ?>

