<?php
include "../connect/connect.php";


  if (isset($_GET['id']))
  {
    $id = $_GET['id'];
   
    //delete data pada database
    $query = mysqli_query($connect, "SELECT * FROM berita WHERE id =$id");
    while($data = mysqli_fetch_array($query)){

    

              
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../form page/form.css">
    <link rel="stylesheet" href="../form page/bootstrap.min.css">
    <title>Laporan</title>
    <link rel="shortcut icon" href="../infoApp page/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../infoApp page/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="latar">
        <div class="beranda">
            <a href="berita.php"><img src="../form page/arrow.png" alt="back"  id="back"></a>
            <br>
            <br>
            <h2><?php echo $data['judul']; ?></h2>    
            <br>
            <img src="img/<?php echo $data['photo']; ?>" alt="berita" width="50%" style="display:block; margin:auto;"> 
            <br>
            <br>
            <p><?php echo $data['isi']; ?></p>       
        </div>
        <?php }} ?>
    </div>
</body>
</html>