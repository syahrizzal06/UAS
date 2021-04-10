<?php include 'koneksi.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
	<link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Shade|Covered+By+Your+Grace" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="style.css">
        <title>Signup</title>
        <style>

		blockquote {
			font: 2em/1em 'Open Sans', sans-serif;
			-webkit-text-stroke: 1px black;
			text-shadow: 2px 2px #000;
			margin: -80px 0 100px 0;
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
		.login {
			padding: 2em;
			margin: 8em auto;
			width: 17em;
			background: #fff;
			border-radius: 3px;
		}				
		input[type="password"],
		input[type="text"],
		input[type="email"],
		textarea {
		padding: 8px;
		width: 95%;
		background: #efefef;
		border: 0;
		font-size: 10pt;
		margin: 6px 0px;
		}
		h4 {
			font-size: 40px;
			font-family: 'Bungee', cursive;
			margin-bottom: 20px;
			margin-top: 10px;
		}
        </style>
    </head>
    <body>
	<div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 mx-auto">
			    <div class="login">
				<center><h4>Signup</h4></center>
                <form action="prosesdaftar.php" method="post" onSubmit="retrun validasi()">
                <input type="text" name="user" placeholder="USER"><br>
                <input type="password" name="password" placeholder="PASSWORD"><br>
                <input class="btn" type="submit" name="login" id="partyTimeButton" value="daftar">
                
            </form>
        </div>     
		
    </body>
    
    <script type="text/javascript">
	function validasi() {
		var user = document.getElementById("user").value;
		var password = document.getElementById("password").value;		
		if (user != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>