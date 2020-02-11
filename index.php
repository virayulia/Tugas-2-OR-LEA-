<?php 

session_start();
if (!isset($_SESSION["KIRIM"])){
	header("Location: login.php");
	exit;
}

$db=mysqli_connect("localhost", "root","", "transaksi");
$query=mysqli_query($db,"SELECT*FROM barang");
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="desain.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gelasio:700&display=swap">
	<title>Data Toko Asia Ponsel</title>
	<style>
		*{
		background: teal;
		}
		header{
			text-align: center;
			padding: 10px 5px;
		}

		header .wrapper h1{
			color: white;
			text-transform: uppercase;
			font-size: 2.5rem;
			text-shadow: 0 4px 0px black;
			border-bottom: 5px solid white;
			display: inline-block;
		}
		.tabel1{
			color: black;
			border-bottom: 5px solid white;
			border-right: 3px solid white;
			border-left: 3px solid white;
			border-top: 1px solid white;
		}
		.tabel1 tr th{
			background: #f8ed91;
			color: black;
			font-weight: normal;
		}
		.tabel1 tr td{
			background: #fbfcc8;
			color: black;
			font-weight: normal;
		}

		 .wrapper-top{
			color: white;
		}

		.tabel .wrapper-top a{
			background: turquoise;
			color: black;
			text-decoration: none;
			text-transform: uppercase;
			border-radius: 10px;
			padding : 4px 10px;
			border-top: none;
			border-left: none;
			border-right: none;
		}
		.tabel .wrapper-top a:hover{
			background: #039eac;
			box-shadow: 0 15px 25px -5px rgba(0,0,0,.7);
		}
		.tabel .wrapper-bottom a{
			color: black;
			text-decoration: none;
			text-transform: uppercase;
			border-radius: 15px;
			padding : 6px 25px;
			border :5px solid black;
			border-top: none;
			border-left: none;
			border-right: none;
			background: turquoise;
			transition: transform .5s ease-out;
			cursor: pointer;
		}
		.tabel .wrapper-bottom a:hover{
			background: #039eac;
			box-shadow: 0 15px 25px -5px rgba(0,0,0,.7);
		}
		

	</style>
</head>
<body>
	<center>
	<header>
		<div class="wrapper">
			<h1>Data Ketersediaan Handphone Toko Asia Ponsel</h1>	
		</div>

	</header>
	<section class="tabel">
		<div class="wrapper-top">
		<table cellpadding="10" cellspacing="5" class="tabel1">
			<tr>
				<th>ID HP</th>
				<th>JENIS HP</th>
				<th>TIPE HP</th>
				<th>STOK</th>
				<th>HARGA HP</th>
				<th>AKSI</th>
			</tr>

			<?php while($row=mysqli_fetch_assoc($query)) : ?>
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['jenis'] ?></td>
				<td><?php echo $row['tipe'] ?></td>
				<td><?php echo $row['stock'] ?></td>
				<td><?php echo $row['harga'] ?></td>
				<td><a class= "ubah" href="ubah.php?id=<?php echo $row['id']?>">UBAH</a>
					<a class= "hapus" href="delete.php?id=<?php echo $row['id']?>">HAPUS</a></td>
			</tr>
			<br>
			<?php endwhile; ?>
				</table>
		</div>
	
	<div class="wrapper-bottom">
	<br>
	<a href="tambah.php">TAMBAH DATA</a>
	<a href="cetak.php">CETAK</a>
	<a href="login.php">Logout</a>
	</div>
	</section>
	</center>

</body>
</html>
