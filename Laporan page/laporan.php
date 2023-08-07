<?php
include "../connect/connect.php";

session_start();

if (isset($_GET['id']))
{
  $id = $_GET['id'];
 
  //ambil data photo

  $get_data = mysqli_fetch_array(mysqli_query($connect, "SELECT photo FROM laporan WHERE id ='$id'"));
 

  //delete data pada database
  $query = mysqli_query($connect, "DELETE FROM laporan WHERE id ='$id'");
 
 
  if($query){
    unlink("images/".$get_data["photo"]); // delete file
    header("Location:laporan.php");

  }else{
    header("Location:laporan.php");
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>  
    <link rel="stylesheet" href="laporan.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    <link rel="shortcut icon" href="../infoApp page/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../infoApp page/favicon.ico" type="image/x-icon">
    <style>
            .dropdown {
                position: relative;
                display: inline-block;

            }
    
            .dropdown-content {
                display: none;
                position: absolute;
                right: 0;
                top: 100%;
                background-color: #2b2b27;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
    
            .dropdown:hover .dropdown-content {
                display: block;
            }
            
            .dropdown-btn {
                
                align-items: center;
                justify-content: center;
                margin: 0;
                border: none;
                background: none;
                color: #2b2b27;
                font-size: 16px;
                cursor: pointer;
                text-decoration: none;
            }
    
            .dropdown-btn i {
                margin-left: 5px;
            }
    
            /* Style for the profile image */
            .profile-image {
                width: 25px;
                height: 25px;
                border-radius: 50%;

            }
    
            
            .dropdown-content a {
                color: #2b2b27;
                padding: 12px 16px;
                text-decoration: none;
                display: flex; /* To align the image and text horizontally */
                align-items: center; /* To center the items vertically */
            }
    
            .dropdown-header {
                padding: 12px 16px;
                background-color: #2b2b27;
                font-weight:200;
                text-align: center;
                color:#fff;
            }
    
            .dropdown-content a:hover {
                background-color: #bca12a;
            }
    
            .dropdown-divider {
                height: 0.7px;
                margin: 2px;
                background-color: #464747;
            }
    </style>
</head>
<body>
    <section class="header">
        <nav>
            <a href="../index.php"><img src="../infoApp page/images/logo.png" alt="index"></a>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="../infoApp page/infoApp.php">Info Aplikasi</a></li>
                    <li><a href="../Berita page/berita.php">Berita</a></li>
                    <li><a href="laporan.php">Laporan</a></li>
                    <li><a href="../contactUs page/contactUs.php">Contact Us</a></li>
                    <?php
                    if(!isset($_SESSION['username'])){
                        include ('../navigasi/nav_not.php');
                    }else{
                        include ('../navigasi/nav_login.php');
                    }
                    ?>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>
        <script src="../infoApp page/index.js"></script>
        <div class="content">
            <h1>Laporan Saya</h1>
            <a href="../form page/form.php" id="melapor">Buat Laporan</a>
            <?php
            $myid = $_SESSION['id_user'];
            $query = mysqli_query($connect, "SELECT * FROM laporan where id_user=$myid");
            $no=1;
            while($data = mysqli_fetch_array($query)){

            
            ?>
            <div class="laporan">
                <h3>Laporan <?php echo $no++; ?></h3>
                <p><?php echo $data['tanggal']; ?></p>
                <p>status : <?php echo $data['status']; ?></p>
                <p>Lokasi : <?php echo $data['alamat']; ?></p>
                <a href="images/<?php echo $data['photo']; ?>" id="lapor">Gambar Lokasi</a>
                <p><?php echo $data['keterangan']; ?></p>
                <a href="laporan.php?id=<?php echo $data['id'];?>" id="hapus">hapus</a>
            </div>
            <?php
            }
            ?>
        </div>
    </section>
    
</body>
</html>