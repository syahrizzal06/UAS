<?php 
	
	$koneksi = mysqli_connect("localhost","root","","relawan" );

	if (!$koneksi) {
		die("Gagal Terhubung dengan database".mysqli_connect_error());
	}

 ?>