<?php 

session_start();
if (!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
 
$db=mysqli_connect("localhost", "root","", "transaksi");
$id = $_GET['id'];
	$query=mysqli_query($db,"SELECT * FROM barang WHERE id='$id' ");
	$row =mysqli_fetch_assoc($query);
if (isset($_POST['simpan'])){
	$id = $_POST ['id'];
	$jenis = $_POST ['jenis'];
	$tipe = $_POST ['tipe'];
	$stok = $_POST ['stok'];
	$harga = $_POST ['harga'];
	
	$queryy=mysqli_query($db,"UPDATE barang SET jenis='$jenis', tipe='$tipe', stock='$stok', harga='$harga' WHERE id= '$id' ");
	if (mysqli_affected_rows($db)) {
		echo "
		<script>
		alert('UPDATE SAVED')
		document.location.href='index.php'
		</script>
		";
	}else {
		echo "
		<script>
		alert('UPDATE NOT SAVED')
		</script>
		";
	}

}
 ?> 
 
<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
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

 	</style>
</head>
<body>
	<section class="tambah">
		<div class="wrapper">
			<h2>Ubah Data</h2>
			<div class="wrapper-tambah">
				<form action="" method="post">
				<label>ID HANDPHONE</label><br>
			 	<input type="text" name="id" value="<?php echo $row['id']?>" autocomplete="off"
			 	placeholder="Masukkan Id Hanphone"><br>
			 	<label>JENIS HANDPHONE</label><br>
			 	<input type="text" name="jenis" value="<?php echo $row['jenis']?>" autocomplete="off"
			 	placeholder="Masukkan Jenis Hanphone"><br>
			 	<label>TIPE HANDPHONE</label><br>
			 	<input type="text" name="tipe" value="<?php echo $row['tipe']?>" autocomplete="off"
			 	placeholder="Masukkan Tipe Hanphone"><br>
			 	<label>STOK HANDPHONE</label><br>
			 	<input type="text" name="stok" value="<?php echo $row['stock']?>" autocomplete="off"
			 	placeholder="Masukkan Stok Hanphone"><br>
			 	<label>HARGA HANDPHONE</label><br>
			 	<input type="text" name="harga" value="<?php echo $row['harga']?>" autocomplete="off"
			 	placeholder="Masukkan Harga Hanphone"><br>
			 	<input type="submit" name="simpan" value="SAVE">
			 	</form>
			</div>
		</div>
	</section>
</body>
</html>
 