<?php
include ('../../../index.php?target=data-laporan');
include ('../../../connect/connect.php');

  if (isset($_GET['id']))
  {
    $id = $_GET['id'];
    $status = "selesai";
   
    //delete data pada database
    $query = mysqli_query($connect, "UPDATE laporan SET status='$status' WHERE id ='$id'");
   
   
    if($query){ // delete file
      header("Location:../../index.php?target=data-laporan");
  
    }else{
      header("Location:../../index.php?target=data-laporan");
    }
  
  }
              ?>