<?php
include ('../../../index.php?target=data-admin');
include ('../../../connect/connect.php');

  if (isset($_GET['id']))
  {
    $id = $_GET['id'];
   
    //delete data pada database
    $query = mysqli_query($connect, "DELETE FROM admin WHERE id ='$id'");
   
   
    if($query){ // delete file
      header("Location:../../index.php?target=data-admin");
  
    }else{
      header("Location:../../index.php?target=data-admin");
    }
  
  }
              ?>