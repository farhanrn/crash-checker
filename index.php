<?php
include "connect/connect.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>  
    <link rel="stylesheet" href="Beranda page/beranda.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    <link rel="shortcut icon" href="infoApp page/favicon.ico" type="image/x-icon">
    <link rel="icon" href="infoApp page/favicon.ico" type="image/x-icon">
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
            <a href="index.php"><img src="infoApp page/images/logo.png" alt="index"></a>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="infoApp page/infoApp.php">Info Aplikasi</a></li>
                    <li><a href="Berita page/berita.php">Berita</a></li>
                    <?php
                    if(isset($_SESSION['username'])){
                        echo "<li><a href='Laporan page/laporan.php'>Laporan</a></li> <li><a href='contactUs page/contactUs.php'>Contact Us</a></li>";
                    }
                    if(!isset($_SESSION['username'])){
                        include ('navigasi/nav_not.php');
                    }else{
                        include ('navigasi/nav_login.php');
                    }
                    ?>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>
        <script src="infoApp page/index.js"></script>
        
        <div class="content">
            <h1>Crash Checker</h1>
            <p>Jadikan perjalanan Anda lebih menyenangkan dengan melaporkan 
            setiap kerusakan yang ditemukan pada infrastruktur jalan,
            Jangan biarkan kerusakan infrastruktur jalan menghambat perjalanan Anda, 
            laporkan segera dan nikmati perjalanan yang aman dan nyaman.</p><br>
            <?php
            if(!isset($_SESSION['username'])){
                echo "<a href='login regis page/login.php'>Buat Laporan</a>";
            }else{
                echo "<a href='form page/form.php'>Buat Laporan</a>";
            }

            ?>
        </div>
    </section>
</body>
</html>