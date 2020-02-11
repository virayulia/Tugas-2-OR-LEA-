<?php 

session_start();
if (!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$db=mysqli_connect("localhost", "root","", "transaksi");
if (isset($_POST['simpan'])){
	$id = $_POST ['id'];
	$jenis = $_POST ['jenis'];
	$tipe = $_POST ['tipe'];
	$stok = $_POST ['stok'];
	$harga = $_POST ['harga'];
	$query=mysqli_query($db,"INSERT INTO barang VALUES ('$id','$jenis','$tipe','$stok','$harga')");
	if (mysqli_affected_rows($db)) {
		echo "
		<script>
		alert('DATA SAVED')
		document.location.href='index.php'
		</script>
		";
	}else {
		echo "
		<script>
		alert('DATA NOT SAVED')
		</script>
		";
	}
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gelasio:700&display=swap">
 	<title>Tambah Data</title>
 	<style >
 		
		input{
			outline: none;
		}
		body{
			background: teal;
		}
		.tambah{
			color: white;
			text-align: center;
			padding: 15px 10px;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.tambah .wrapper h2{
			text-shadow: 0 4px 0px black;
			font-size: 2.5rem ;
			text-transform: uppercase;
			border-bottom: 7px solid white;
			display: inline-block;
			padding-bottom: 7px;
			margin-bottom: 40px;
		}
		.tambah .wrapper-tambah input{
			width: 100%;
			height: 20px;
			border: none;
			border-radius: 11px;
			padding: 10px 20px;
			margin-bottom: 18px;
			font-family: sans-serif;
		}
		.tambah .wrapper-tambah input[type="submit"]{
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
		.tambah .wrapper-tambah input[type="submit"]:hover{
			background: #039eac;
			box-shadow: 0 15px 25px -5px rgba(0,0,0,.7);
		}
		#text{
			float: left;
            height: 10px;
            overflow: auto;
		}

 	</style>
 </head>
 <body>
 	<section class="tambah" id="tambah">
 		<div class="wrapper">
 			<h2>Tambah Data</h2>
 			<div class="wrapper-tambah">
		 		<form action="" method="post">
		 			<label>ID HANDPHONE</label><br>
		 			<input type="text" placeholder="Masukkan Id Hanphone" name="id" autocomplete="off"><br>
		 			<label>JENIS HANDPHONE</label><br>
		 			<input type="text" placeholder="Masukkan Jenis Hanphone" name="jenis" autocomplete="off"><br>
		 			<label>TIPE HANDPHONE</label><br>
		 			<input type="text" placeholder="Masukkan Tipe Hanphone" name="tipe" autocomplete="off"><br>
		 			<label>STOK HANDPHONE</label><br>
		 			<input type="text" placeholder="Masukkan Stok Hanphone" name="stok" autocomplete="off"><br>
		 			<label>HARGA HANDPHONE</label><br>
		 			<input type="text" placeholder="Masukkan Harga Hanphone" name="harga" autocomplete="off"><br>
		 			<input type="submit" name="simpan" value="SAVE"><br>
				</form>
 			</div>

 		</div>
 	</section>
 </body>
 </html>
