<?php 
$db=mysqli_connect("localhost","root", "", "transaksi");
$id=$_GET['id'];
$query=mysqli_query($db, "DELETE FROM barang WHERE id='$id' ");
if (mysqli_affected_rows($db)) {
		echo "
		<script>
		alert('DELETE SUCCES')
		document.location.href='index.php'
		</script>
		";
	}else {
		echo "
		<script>
		alert('DELETE NOT SUCCES')
		</script>
		";
	}
 ?>