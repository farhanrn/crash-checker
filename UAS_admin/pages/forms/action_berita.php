<?php
session_start();

include "../../../connect/connect.php";

date_default_timezone_set('Asia/Makassar');
$date = date('YmdHis');
//menerima data
$judul     = $_POST["judul"];
$isi       = $_POST["isi"];


//if($_POST["submit"]){

    $ekstensi_diperbolehkan	= array('png','jpg');
    $photo_name             = $_FILES['photo']['name']; //nama foto
    $x                      = explode('.',$photo_name);  //mengambil ekstensi dari file name
    $ekstensi               = strtolower(end($x)); //membuat ekstensi menjadi huruf kecil
    $ukuran	                = $_FILES['photo']['size']; //ukuran photo
    $file_tmp               = $_FILES['photo']['tmp_name'];	//isi photo yang diupload
    $photo_name_modified    = "photo_Berita_".$date."_".$photo_name;

    /*
    echo $photo_name."<br>";
    var_dump ($x);
    echo $ekstensi."<br>";
    echo $ukuran."<br>";
    echo $file_tmp."<br>";*/

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1024000){			
            move_uploaded_file($file_tmp, '../../../Berita page/img/'.$photo_name_modified);
            $sql    = "INSERT INTO berita (judul,isi,photo) VALUE ('$judul','$isi','$photo_name_modified')";
            $query  = mysqli_query ($connect,$sql);

            if($query){
                header("Location:../../index.php?target=data-berita"); //sukses
            }else{
                header("Location:../../index.php?target=input_berita"); //gagal upload gambar
            }
        }
        
        else{
           header("Location:../../index.php?target=input_berita"); //ukuran gambar terlalu besar
        }
    }
    
    else{
        header("Location:../../index.php?target=input_berita"); //ekstensi tidak sesuai/tidak diizinkan
        
    }

?>
	
