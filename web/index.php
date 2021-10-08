<?php
	session_start();
	if(!$_SESSION['userid']){
		echo '<script>location.href="./login";</script>';
	}
?>
<!--나중에 지울 부분-->
<script>location.href="/ohsailor";</script>
<!---->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>오! 수병</title>
</head>
<body>
    
</body>
</html>
