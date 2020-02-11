<?php


$db= mysqli_connect("localhost","root","","transaksi");


function query($query){
    global $db;
    
    $result = mysqli_query($db, $query);
    $rows = [];
    while($isi = mysqli_fetch_assoc($result)){
            $rows[] = $isi;
    
    }
    return $rows;
}

?>


