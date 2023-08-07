<?php
session_start();

include "../../../connect/connect.php";

//menerima data
$username = $_POST["username"];
$email    = $_POST["email"];
$password = md5($_POST["password"]);
$pass     = md5($_POST["pass"]);

if($password == $pass){
    $sql    = "INSERT INTO admin (username,email,password) VALUE ('$username','$email','$pass')";    
    $query  = mysqli_query ($connect,$sql);

    if($query){
        header("Location:login.php"); //sukses
    }
}else{
    echo "password yang anda masukkan berbeda <br><a href='regist.php'>Kembali</a>";
}

       
?>
	
