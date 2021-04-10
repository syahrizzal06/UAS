
<?php 	
	include 'koneksi.php';
	

	
	$password = md5($_POST['password']);

    if (isset($_POST['user'])) {
        $user = $_POST['user'];
       
        $query = mysqli_query($koneksi, "SELECT user FROM akun WHERE user = '$user'"); 
       
        if($query->num_rows > 0) {
         echo "<script>alert('USER sudah terdaftar');</script>";
        } else {
            mysqli_query($koneksi, "INSERT INTO akun VALUES('','$user','$password')") or die (mysqli_error($koneksi,$query));
        }
       }
       
       
	if ($query) {
		header("location: login.php");
			}else{
		echo "<h2 align=center>daftar gagal</h2>";
	}

        ?>
