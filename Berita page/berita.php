<?php
include "../connect/connect.php";

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/specimen/Kumbh+Sans -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">  <!-- https://fontawesome.com/-->  
    <link rel="stylesheet" href="css/magnific-popup.css">       <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/tooplate-vertex.css">
    <link rel="stylesheet" href="css/berita.css">
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
    <!-- Nav -->
    <nav>
            <a href="../index.php"><img src="img/logo.png" alt="index"></a>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="../infoApp page/infoApp.php">Info Aplikasi</a></li>
                    <li><a href="berita.php">Berita</a></li>
                    <?php
                    if(isset($_SESSION['username'])){
                        echo "<li><a href='../Laporan page/laporan.php'>Laporan</a></li> <li><a href='../contactUs page/contactUs.php'>Contact Us</a></li>";
                    }
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
    <!-- Content -->
    <main>
        <div id="intro" class="tm-section">
            <!-- Intro left -->
            <div class="tm-section-col tm-content">
                <?php
                $query = mysqli_query($connect, "SELECT * FROM berita");
                while($data = mysqli_fetch_array($query)){
                ?>
                <div class="tm-media">
                    <img src="img/<?php echo $data['photo']; ?>" alt="Intro image">
                    <div class="tm-media-body">
                        <h2><a href="detail_berita.php?id=<?php echo $data['id']; ?>" class="tm-text-primary"><?php echo $data['judul']; ?></a></h2>
                        <p class="tm-mb-20 tm-text-small">
                        <?php echo $data['isi']; ?></p>
                        <div class="tm-text-right">
                            <a href="detail_berita.php?id=<?php echo $data['id']; ?>" class="tm-btn tm-btn-next">Read more...</a>
                        </div>
                        <hr class="tm-hr tm-mr">
                    </div>
                </div>
                <?php }?>                
            </div>
            
            <!-- Intro right -->
            <div class="tm-section-col tm-parallax" data-parallax="scroll" data-image-src="img/vertex-bg-01.jpg"></div>
        </div> <!-- #intro -->

    </main>

    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });

        $(function(){
            
            /*************** Navigation *****************/

            const tmMainNav = $("#tm-main-nav");

            tmMainNav.singlePageNav({
                filter: ':not(.external)'
            });

            $('.navbar-toggler').click(function(e) {
                e.stopPropagation();
                tmMainNav.toggleClass('show');
            });

            $("html").click(function(e) {
                $("#tm-main-nav").removeClass("show");
            });

            /****************** Smooth Scrolling *****************/

            $(".tm-btn-next").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        // window.location.hash = hash;
                    });
                }
            });

            $('.tm-brand-icon').on('click', function(event) {
                $('html, body').animate({
                        scrollTop: $('#intro').offset().top
                    }, 800);
            });

            /****************** Gallery ******************/

            const galleryItems = document.querySelector(".tm-gallery").children;
            const itemsPerPage = 10;
            const totalPages = Math.ceil(galleryItems.length / itemsPerPage);
            const pageAttribute = 'data-page';

            function setPagination(currentPage) {
                for(let i = 1; i <= totalPages; i++) {
                    var $pager = '';
                    
                    if(currentPage == i) {
                        $pager = $('<a href="javascript:void(0);" class="active tm-paging-link" '+pageAttribute+'="'+i+'"></a>');
                    } else {
                        $pager = $('<a href="javascript:void(0);" class="tm-paging-link" '+pageAttribute+'="'+i+'"></a>');
                    }

                    $pager.html(i);

                    $pager.click(function(){ 
                        $('.tm-paging-link').removeClass("active");
                        $(this).addClass('active');
                        var page = $(this).eq(0).attr(pageAttribute);
                        showItems(page);
                    });

                    $pager.appendTo($('.tm-paging'));
                }
            }

            function showItems(currentPage) {
                for(let i = 0; i < galleryItems.length; i++) {
                    galleryItems[i].classList.remove("show");
                    galleryItems[i].classList.add("hide");

                    if(i >= (currentPage * itemsPerPage) - itemsPerPage && i < currentPage * itemsPerPage) {
                        galleryItems[i].classList.remove("hide");
                        galleryItems[i].classList.add("show");
                    }
                }
            }

            setPagination(1);
            showItems(1);

            /****************** Magnific Popup ***********/

            $('.tm-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
</body>
</html>