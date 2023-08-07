<?php
include "../connect/connect.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Laporan</title>
    <link rel="shortcut icon" href="../infoApp page/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../infoApp page/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="latar">
        <div class="beranda">
            <a href="../index.php"><img src="../form page/arrow.png" alt="back"  id="back"></a>
            <br>
            <br>
            <h2> FORM PELAPOR</h2>
            <?php 
            if (isset($_GET['message'])){
              if ($_GET['message']== "failed_image"){
                echo "<div style='margin-left: 100px; margin-right:10px;' class='alert alert-danger' role='alert'>
                Gagal mengupload foto. Periksa koneksi anda 
                </div>";
            
              }
              else if ($_GET['message']== "big_size"){
            
                echo "<div style='margin-left: 100px; margin-right:10px;' class='alert alert-danger' role='alert'>
                Gagal mengupload foto. Gambar terlalu besar max 1 MB.
                </div>";
            
              }
              else if ($_GET['message']== "failed_extension"){
                echo "<div style='margin-left: 100px; margin-right:10px;' class='alert alert-danger' role='alert'>
                Gagal mengupload foto. Ekstensi gambar tidak sesuai. Pastikan menggunakan ekstensi PNG/JPG.
                </div>";
              }}
            ?>
            <?php 
            $id           = $_SESSION["id_user"];
            $username     = $_SESSION["username"];
            ?>  
            <form method="post" action="action_form.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="hidden" name="username" value="<?php echo $username ?>">
                <label for="nomor">Nomor Telepon Pelapor</label><br>
                <input type="number" name="nomor" placeholder="Masukkan nomor telepon anda" required>
                <br>
                <br>
                <label>Lokasi</label><br>
                <textarea type="text" name="Alamat" placeholder="Masukkan Alamat Lokasi kejadian" rows="2" required></textarea>
                <br>
                <br>
                <label>Keterangan</label><br>
                <textarea type="text" name="keterangan" placeholder="Masukkan keterangan kerusakan" rows="2" required></textarea>
                <br>
                <br>
                <label>Foto Lokasi</label><br>
                <input type="file" name="photo" accept="image/png,image/jpg" required>
                <br>
                <br>
                <br>
                <div id="button">
                <button name="submit" type="submit" id="buts">Submit</button>
                <button name="reset" type="reset" id="butc" onclick="reset()" >Reset</button>
            </div>
            </form>
            
            <script>
            function reset(){
            window.location.replace('form page/form.php')
            }
            </script>
        </div>
    </div>
</body>
</html>