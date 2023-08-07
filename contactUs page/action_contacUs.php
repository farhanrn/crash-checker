<?php
session_start();

include "../connect/connect.php";

//menerima data
$username = $_POST["username"];
$nomor    = $_POST["nomor"];
$pesan    = $_POST["pesan"];

$sql    = "INSERT INTO pesan (nomor_telepon,pesan,username) VALUE ('$nomor','$pesan','$username')";    
$query  = mysqli_query ($connect,$sql);

if($query){
    header("Location:../send_pesan/thankyou.php"); //sukses
}

       
?>
	
