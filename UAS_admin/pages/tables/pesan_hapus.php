<?php
include ('../../../index.php?target=data-pesan');
include ('../../../connect/connect.php');

  if (isset($_GET['id']))
  {
    $id = $_GET['id'];
   
    //delete data pada database
    $query = mysqli_query($connect, "DELETE FROM pesan WHERE id ='$id'");
   
   
    if($query){ // delete file
      header("Location:../../index.php?target=data-pesan");
  
    }else{
      header("Location:../../index.php?target=data-pesan");
    }
  
  }
              ?>