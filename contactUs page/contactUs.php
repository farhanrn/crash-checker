<?php
include "../connect/connect.php";

session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="contact/contactUs.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
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
                font-size: 10px;
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
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
            <section class="header">
                <nav>
                    <a href="../index.php"><img src="../infoApp page/images/logo.png" alt="index"></a>
                    <div class="nav-links" id="navLinks">
                        <ul>
                            <li><a href="../index.php">Beranda</a></li>
                            <li><a href="../infoApp page/infoApp.php">Info Aplikasi</a></li>
                            <li><a href="../Berita page/berita.php">Berita</a></li>
                            <?php
                            if(isset($_SESSION['username'])){
                                echo "<li><a href='../Laporan page/laporan.php'>Laporan</a></li>";
                            }
                            ?>
                            <li><a href="contactUs.php">Contact Us</a></li>
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
                <script src="../infoApp page/index.js" async defer></script>


          <!-- Feedback / contact Us-->>
          <div class="container">
            <form method="post" action="action_contacUs.php">
                <h3>Contact Us</h3>
                <input type="hidden" name="username" value="<?php echo $_SESSION["username"] ?>">
                <fieldset>
                    <input placeholder="Nomor Telepon" type="number" tabindex="3" name="nomor" required>
                </fieldset>
                <fieldset>
                    <textarea placeholder="Ketik pesan mu disini...." tabindex="4" name="pesan" required></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" class="tekan">Submit</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>