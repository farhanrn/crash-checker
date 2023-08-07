<?php
include "../connect/connect.php";

session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Info Aplikasi</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="infoApp.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
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
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
            <section class="header">
            <nav>
            <a href="../index.php"><img src="images/logo.png" alt="index"></a>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="../index.php">Beranda</a></li>
                    <li><a href="infoApp.php">Info Aplikasi</a></li>
                    <li><a href="../Berita page/berita.php">Berita</a></li>
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

                <div class="text-box">

                    <h1>Crash Checker</h1>
                    <p>Membantu Anda dalam melakukan pengecekan terhadap infrastruktur jalanan, terutama pada bagian yang rentan terjadi kecelakaan. 
                        Pengguna jalan dapat memberikan pelaporan dan aspirasi terkait dengan kondisi jalan dan infrastruktur 
                        yang mungkin perlu diperbaiki untuk meningkatkan keamanan dan keselamatan pengguna jalan.
                    </p>
                </div>

            </section>

            <!-- ----course section//------>

            <section class="fungsi">
                <h1>Fungsional Aplikasi</h1>
                <p><b>Berikut adalah fungsional utama aplikasi kami</b></p>

                <div class="row">
                    <div class="course-col">
                        <h3>Pelaporan</h3>
                        <p>
                            Aplikasi ini memberikan fitur utama pelaporan
                            secara langsung dengan mengisi form. Di dalam form tersebut
                            akan ada inputan untuk mengirimkan gambar jalanan rusak yang difoto
                            secara langsung. 
                        </p>
                    </div>
                    <div class="course-col">
                        <h3>Edukasi</h3>
                        <p>Aplikasi ini memberikan edukasi kepada masyarakat
                            tentang jenis-jenis jalanan rusak yang membahayakan bagi pengendara. Selain itu, aplikasi ini
                            diharapkan dapat memberikan manfaat untuk meningkatkan kesadaran masyarakat 
                            akan kualitas infrastruktur jalanan yang baik untuk berbagai keperluan mobilisasi
                        </p>
                    </div>
                    <div class="course-col">
                        <h3>Kolaborasi Antarmasyarakat dan Pemerintah</h3>
                        <p>Aplikasi ini diharapkan mampu menguatkan kolaborasi antar masyarakat dan pemerintah untuk
                            bergotong royong mewujudkan infrastruktur terbaik bagi Indonesia dengan saling memberi feedback
                            dan masukan 
                        </p>
                    </div>
                </div>
            </section>
            
            
            <!-----------Dampak--------->

            <section class="campus">
                <h1>Dampak yang Ditimbulkan Dari Kerusakan Jalan</h1>
                <p>Mesikpun banyak faktor yang menyebabkan jalanan menjadi rusak, kita harus 
                    memperhatikan dampak yang diberikan oleh jalan yang rusak. Diantaranya adalah :
                </p>

                <div class="row">
                    <div class="campus-col">
                        <img src="images/ban.jpg" alt="">
                        <div class="layer">
                            <h3>Kerusakan Ban Kendaraan</h3>
                        </div>
                    </div>
                    <div class="campus-col">
                        <img src="images/mobilisasi.jpg" alt="">
                        <div class="layer">
                            <h3>Menghambat Mobilisasi</h3>
                        </div>
                    </div>
                    <div class="campus-col">
                        <img src="images/mati.jpg" alt="">
                        <div class="layer">
                            <h3>Korban Jiwa</h3>
                        </div>
                    </div>
                </div>


            </section>


            <!---Jenis Kerusakan---->

            <section class="kerusakan">
                <h1>Jenis-Jenis Kerusakan Jalanan</h1>
                <p>Berikut adalah top 3 jenis kerusakan jalanan yang 
                    menimbulkan banyak korban 
                </p>
                <div class="row">
                    <div class="facilities-col">
                        <img src="images/pothole4.jpg" alt="">
                        <h3>Pothole</h3>
                        <p>Kondisi dimana jalan berlubang-lubang, baik itu besar ataupun kecil namun banyak, 
                            yang jelas jalan tersebut berlubang, ada sebuah cekungan yang membahayakan setiap pengendara 
                            yang melewatinya, terlebih dengan kecepatan tinggi
                        </p>
                    </div>
                    <div class="facilities-col">
                        <img src="images/edge2.jpg" alt="">
                        <h3>Edge Cracks</h3>
                        <p>Retak garis dimana terjadi pada sisi tepi perkerasan/ dekat bahu dan berbentuk memanjang dengan atau 
                            tanpa cabang yang mengarah ke bahu. </p>
                    </div>
                    <div class="facilities-col">
                        <img src="images/lumpur2.jpg" alt="">
                        <h3>Muddy Roads</h3>
                        <p>Jenis jalan yang tidak beraspal tidak diaspal dengan aspal, beton, batu bata, atau batu; terbuat dari bahan asli permukaan tanah yang dilewatinya</p>
                    </div>
                </div>
            </section>


            <!---======== Undang-undang ======--->
            <section class="education section" id="education">
                <h2 class="section-title">Undang-Undang</h2><br><br>
                <div class="education-container bd-grid">
                    <div class="education-data">
                        <div class="education-names">
                            <!-- <i class="bx bxl-html5 skills-icon"></i> -->
                            <span class="education-name">Pasal 24 (1) UU 22 Tahun 2009</span> 
                            <p class="education-platform ">Penyelenggara Jalan wajib segera dan patut untuk memperbaiki Jalan yang rusak yang dapat mengakibatkan Kecelakaan Lalu Lintas</p>
                        </div>
                    </div>
                </div>
                <div class="education-container bd-grid">
                    <div class="education-data">
                        <div class="education-names">
                            <!-- <i class="bx bxl-html5 skills-icon"></i> -->
                            <br>
                            <span class="education-name">Pasal 273 (1) UU 22 Tahun 2009</span>
                            <p class="education-platform ">Setiap penyelenggara Jalan yang tidak dengan segera dan patut memperbaiki Jalan yang rusak yang mengakibatkan Kecelakaan Lalu Lintas sebagaimana dimaksud dalam Pasal 24 ayat (1) sehingga menimbulkan korban luka ringan dan/ atau kerusakan Kendaraan dan / atau barang dipidana dengan penjara paling lama 6 (enam) bulan atau denda paling banyak Rp12.000.000,00 (dua belas juta rupiah).</p>
                        </div>
                    </div>
                </div>

            <!---Testimonials--->

            <section class="testimonials">
                <h1>Apa saja pendapat mereka?</h1>
                <p>Yuk intip pendapat mereka tentang persoalan ini 
                </p>
                <div class="row">
                    <div class="testimonials-col">
                        <img src="images/bima.jpg" alt="">
                        <div>
                            <p>Menurut gue jalanan tuh infrastruktur yang paling umum dan untuk mobilisasi
                                ekonomi di kota gue, tapi jalanannya tuh kayak 1km bagus, 1km rusak dan banyakan 
                                ditempel-tempel doang. Gue harap pemerintah bisa menyelesaikan persoalan ini
                            </p>
                                <h3>Bima Yudho Saputro</h3>
                        </div>
                    </div>
                    <div class="testimonials-col">
                        <img src="images/rian2.jpg" alt="">
                        <div>
                            <p>Saya harap permasalahan infrastruktur jalanan juga jauh lebih diperhatikan 
                                terlebih lagi dalam peekerjaan ini tidak dapat diselesaikan sekejap mata atau 
                                bukan proyek "roro jongrang". Semoga kedepannya kita dapat bersinergi dengan baik 
                                antara masyarakat dan pemerintah 
                            </p>
                                <h3>Rian Fahardi</h3>


                        </div>
                    </div>
                </div>

            </section>

            <!--Undang Undang-->


                    <!---Call to Action--->

            <section class="cta">
                <H1>Yuk laporkan jalanan yang rusak dengan mengisi form ini</H1>
                <?php
            if(!isset($_SESSION['username'])){
                echo "<a href='../login regis page/login.php' class='hero-btn'>Buat Laporan</a>";
            }else{
                echo "<a href='../form page/form.php' class='hero-btn'>Buat Laporan</a>";
            }

            ?>
            </section>


             <!---Footer--->

             <section class="footer">
                 <h1>ABOUT US</h1>
                 <p>Kelompok 3 dari kelas 3B Program Studi Teknologi Rekayasa Jaringan Telekomunikasi<br>
                    Tugas Perancangan Web
                </p>
             </section>
        <script src="index.js" async defer></script>

        <!---Biodata nama pencipta--->

        <div class="team-container">
            <div class="team-member">
              <img src="images/fahrul.jpeg" alt="Team member 1">
              <h3>Muhammad Fahrul Ikhdar</h3>
              <p>42220026</p>
            </div>
            
            <div class="team-member">
              <img src="images/hajar2.jpeg" alt="Team member 2">
              <h3>Sitti Hajar Syapira</h3>
              <p>42220031</p>
            </div>
            
            <div class="team-member">
              <img src="images/mifta.jpg" alt="Team member 3">
              <h3>Miftahul Ilma Rahmat</h3>
              <p>42220036</p>
            </div>

            <div class="team-member">
                <img src="images/farhan.jpeg" alt="Team member 3">
                <h3>Farhan Rahman</h3>
                <p>42220041</p>
            </div>
          </div>
    </body>
</html>