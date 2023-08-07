<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="../infoApp page/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../infoApp page/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="login">
            <form method="post" action="action_login.php">
                <h1>Login</h1>
                <hr>
                <p>Silahkan memasukkan data dengan benar</p>
                <label for="">Email</label>
                <input type="text" placeholder="emailmu@gmail.com" name="email" required>
                <label for="">Password</label>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" value="login">Login</button>
                <p>Belum Punya akun? <a href="regist.php" id="daftar"> Daftar</a></p>
            </form>
        </div>
        <div class="right">
            <img src="login_gambar.png" alt="login">
        </div>
    </div>
</body>

</html>