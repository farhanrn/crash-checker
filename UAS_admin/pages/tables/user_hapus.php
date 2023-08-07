<?php
include ('../../../index.php?target=data-user');
include ('../../../connect/connect.php');

  if (isset($_GET['id']))
  {
    $id = $_GET['id'];
   
    //delete data pada database
    $query = mysqli_query($connect, "DELETE FROM user WHERE id ='$id'");
   
   
    if($query){ // delete file
      header("Location:../../index.php?target=data-user");
  
    }else{
      header("Location:../../index.php?target=data-user");
    }
  
  }
              ?>