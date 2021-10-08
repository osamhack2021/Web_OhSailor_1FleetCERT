<?php
    session_start();
    if($_SESSION['userid']){
        echo '<script>location.href="/";</script>';
    }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>오!수병 | Login</title>
    <style>
        body{
			margin:0px;
			padding:0px;
			background-color:#FF6F61;
        }
		#all-tab{
			width:100%;
			height:100%;
		}
		#gray-tab{
			float:left;
			width:60%;
		}
		#yellow-tab{
			float:left;
			background-color:red;
			border-top:400px solid gray;
		    border-left: 100px solid transparent;
		    height:0;
		    width:400px;
		}
		.login-input{
			width:50%
		}
		.btn1{
			width:25%;
			height:40px;
			border-radius:20px;
		}
    </style>
</head>
<body>
    <!-- Trend Color : #F5DF4D  #939597 -->
	<div id="all-tab">
		<div id="gray-tab">
			<img src="../pic/logo.png">
		</div>
		<div id="yellow-tab">
			<!-- 로그인 창 -->
			<div style="position:absolute;">
				<form action="./login_action.php" method="post">
					<div>
						<input type="text" name="" id="">
						<input type="password" name="" id="">
					</div>
					<button class="btn1" onclick="">Join</button>
					<input class="btn1" type="submit" value="Login">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
