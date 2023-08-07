<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="../infoApp page/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../infoApp page/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="login">
            <form method="post" action="action_regis.php">
                <h1>Register</h1>
                <hr>
                <p>Silahkan masukkan data yang sesuai</p>
                <label for="">username</label>
                <input type="text" placeholder="username" name="username" required>
                <label for="">Email</label>
                <input type="text" placeholder="emailmu@gmail.com" name="email" required>
                <label for="">Password</label>
                <input type="password" placeholder="password" name="password" required>
                <label for="">Masukkan Ulang Password</label>
                <input type="password" placeholder="Password" name="pass" required>
                <button type="submit" value="registrasi" ">Register</button>
                <p>Sudah Punya Akun? <a href="login.php" id="login">Login</a></p>
            </form>
        </div>
        <div class="right">
            <img src="regist_gambar.png" alt="regist">
        </div>
    </div>
</body>
</html>