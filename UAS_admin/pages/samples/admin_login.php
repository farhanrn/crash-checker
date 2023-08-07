<?php
session_start();

include "../../../connect/connect.php";

//menerima data
$email    = $_POST["email"];
$pass     = md5($_POST["password"]);

$sql    = "SELECT  * from admin where email='$email' and password='$pass'";
$hasil  = mysqli_query ($connect,$sql);
$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["id_user"]=$row["id"];
		$_SESSION["username"]=$row["username"];
		$_SESSION["email"]=$row["email"];
		$_SESSION["password"]=$row["password"];
	

		header("Location:../../index.php");
		
	}else {
		echo "Username atau password salah <br><a href='login.php'>Kembali</a>";
	}
?>