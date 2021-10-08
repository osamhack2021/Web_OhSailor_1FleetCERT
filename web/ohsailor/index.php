<?php
        session_start();
        if(!$_SESSION['userid']){
                echo '<script>location.href="./login";</script>';
        }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>오!수병 | 메인</title>
</head>
<body>
	
	<!--게시판 부분 미들-->
    <div style="width:60%;">
		<div style="float:left;">
			<div style="float:left;">
				번호	
			</div>
			<div style="float:left;">
				제목
			</div>
			<div style="float:right;">
				날짜
			</div>
		</div>
		<div style="float:left;">
            <div style="float:left;">
                번호    
            </div>
            <div style="float:left;">
                제목
            </div>
            <div style="float:right;">
                날짜
            </div>
        </div>
	</div>
</body>
</html>
