<?php 

session_start();
if ( isset($_POST["submit"])) {
        if ($_POST["username"] == "admin" && $_POST["password"] == "admin1") {
            header("Location: index.php");
            exit;
        }

        else {
            echo "
            <script>alert('username dan password yang anda masukkan salah');</script>  
            ";
        }
    }
 ?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gelasio:700&display=swap">
	<title>Login</title>
	<style>
		input{
			outline: none;
		}
		body{
			background: teal;
		}
		header, section {
			color: white;
			padding: 15px 40px;
		}
		.wrapper h1{
			text-shadow: 0 4px 0px black;
			font-size: 2.5rem;
			text-transform: uppercase;
			border-bottom: 7px solid white;
			display: inline-block;
			padding-bottom: 7px;
			margin-bottom: 30px;
		}
		.wrapper2 h2{
			text-shadow: 0 4px 0px black;
			font-size: 2rem;
		}
		.wrapper2 p{
			text-shadow: 0 4px 0px black;
			font-size: 18px;
		}
		.form-login{
			background: turquoise;
			width: 250px;
            height: 240px;
            border-radius: 11px;
		}
		.wrapper h2{
			text-shadow: 0 4px 0px black;
			font-size: 1,5rem;
		}
		.wrapper .wrapper-login input{
			width: 60%;
			height: 15px;
			border: none;
			border-radius: 11px;
			padding: 10px 20px;
			margin-bottom: 18px;
			font-family: sans-serif;
		}
		.wrapper .wrapper-login input[type="submit"]{
			color: black;
			text-decoration: none;
			text-transform: uppercase;
			border-radius: 11px;
			padding: 10px 60px;
			padding-bottom: 23px;
			border :5px solid black;
			border-top: none;
			border-left: none;
			border-right: none;
			background: turquoise;
			display: inline-block;
			width: auto;
			cursor: pointer;
			transition: background all .5s ease-out;
		}
		.wrapper .wrapper-login input[type="submit"]:hover{
			background: #039eac;
			box-shadow: 0 15px 25px -5px rgba(0,0,0,.7);
		}

	</style>
</head>
<body>
	<center>
	<header>
		<div class="wrapper">
			<h1>Selamat Datang!</h1>
		</div>
		<div class="wrapper2">
			<h2>Data Toko Asia Ponsel</h2>
			<p>Anda harus Login sebagai Admin terlebih dahulu!</p>
		</div>
			
	</header>
	<section class="form-login">
		<div class="wrapper">
			<h2>Form Login</h2>
			<div class="wrapper-login">
				<form action="" method="POST">
					<input type="text" name="username" placeholder="Masukkan Username" autocomplete="off"><br>
					<input type="password" name="password" placeholder="Masukkan Password" autocomplete="off"><br>
					<input type="submit" name="submit" value="KIRIM">
				</form>
			</div>
		</div>
	</section>
	</center>

</body>
</html>

