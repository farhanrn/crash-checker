<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thankyou Page</title>
	<link rel ="stylesheet" href="thankyou.css">
	<link rel="shortcut icon" href="../infoApp page/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../infoApp page/favicon.ico" type="image/x-icon">
</head>
<body>
	<div class="container">
		<div class="popup">
			<img src="tik.png">
			<h2>Terima Kasih!</h2> 
			<p>Pesan anda telah dikirimkan.</p>
			<a href="../contactUs page/contactUs.php"><button type="button">Kirim Pesan lagi</button></a>
		</div>
	</div>
	<script type="text/javascript">
		var count = 10; 
		function countDown() {
			if(count >= 10){
				setTimeout(function(){window.location.replace('../index.php')}, 7000);	
		}}
		countDown();
	</script>

</body>
</html>