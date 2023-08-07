<?php
session_start();

include "../connect/connect.php";

date_default_timezone_set('Asia/Makassar');
$date = date('YmdHis');
$tanggal = date('Y-m-d');
//menerima data
$id     = $_POST["id"];
$username = $_POST["username"];
$nomor  = $_POST["nomor"];
$Alamat = $_POST["Alamat"];
$ket    = $_POST["keterangan"];
$status = "menunggu diproses";

//if($_POST["submit"]){

    $ekstensi_diperbolehkan	= array('png','jpg');
    $photo_name             = $_FILES['photo']['name']; //nama foto
    $x                      = explode('.',$photo_name);  //mengambil ekstensi dari file name
    $ekstensi               = strtolower(end($x)); //membuat ekstensi menjadi huruf kecil
    $ukuran	                = $_FILES['photo']['size']; //ukuran photo
    $file_tmp               = $_FILES['photo']['tmp_name'];	//isi photo yang diupload
    $photo_name_modified    = "photo_laporan_".$date."_".$photo_name;

    /*
    echo $photo_name."<br>";
    var_dump ($x);
    echo $ekstensi."<br>";
    echo $ukuran."<br>";
    echo $file_tmp."<br>";*/

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1024000){			
            move_uploaded_file($file_tmp, '../Laporan page/images/'.$photo_name_modified);
            $sql    = "INSERT INTO laporan (nomor_telepon,alamat,keterangan,photo,id_user,username,tanggal,status) VALUE ('$nomor','$Alamat','$ket','$photo_name_modified','$id','$username','$tanggal','$status')";
            $query  = mysqli_query ($connect,$sql);

            if($query){
                header("Location:../thankyou page/thankyou.php"); //sukses
            }else{
                header("Location:form.php?message=failed_image"); //gagal upload gambar
            }
        }
        
        else{
           header("Location:form.php?message=big_size"); //ukuran gambar terlalu besar
        }
    }
    
    else{
        header("Location:form.php?message=failed_extension"); //ekstensi tidak sesuai/tidak diizinkan
        
    }

?>
	
