
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
    <div style="width:60%;padding-left:20%">
        <div style="float:left;width:100%;">
            <div style="float:left;width:30px;">
                번호
            </div>
            <div style="float:left;padding-left:15px;">
                제목
            </div>
            <div style="float:right;width:100px;text-align:center;">
                작성자
            </div>
			<div style="float:right;width:100px;text-align:center;">
				날짜
			</div>
        </div><hr>
        <div style="float:left;width:100%;">
            <div style="float:left;width:30px;">
                1
            </div>
            <div style="float:left;padding-left:15px;">
                오늘 급식 최고!
            </div>
			<div style="float:right;width:100px;text-align:center;">
				익명
			</div>
            <div style="float:right;width:100px;text-align:center;">
                2021.10.09.
            </div>
        </div>
		<div style="float:left;width:100%;">
            <div style="float:left;width:30px;">
                2
            </div>
            <div style="float:left;padding-left:15px;">
                미역국에 조미료 줄여주세요.
            </div>
            <div style="float:right;width:100px;text-align:center;">
                익명
            </div>
            <div style="float:right;width:100px;text-align:center;">
                2021.10.09.
            </div>
        </div>
    </div>
</body>
</html>
