<?php
        session_start();
        if(!$_SESSION['userid']){
                echo '<script>location.href="/login";</script>';
        }else{
            $num = $_GET['num'];
            $connect = mysqli_connect('localhost', 'dbadmin', 'tooringa', 'ohsailor') or die ("connect fail");
            $query = "select * from evaluation_board where num =$num";
            $result = $connect->query($query);
            $rows = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>오!수병 | 1번 게시물</title>
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
            <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
            <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2">Login</button>
            <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
        </div>
    </header>
    <!--뷰어-->
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center py-3 mb-4">
            <div style="text-align:left; width:100%;">
                <div>
                    <div style="width:100%;float:left;">
                        <span style="float:left; font-size:20px;"><?php echo $rows['title']?></span>
                        <span style="float:right;">분류</span>
                    </div>
                    <br>
                    <div style="width:100%;float:left;">
                        <span style="float:left;">
                            익명
                        </span>
                        <span style="float:right;">
                        <?php echo $rows['date']?>
                        </span>
                    </div>
                </div><br style="height:10px;"><hr style="width:100%;">
                <p><?php echo $rows['content']?></p>
            </div>
            
        </div>
        <div class="container">
            <p>댓글</p>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" style="float:left;">
                <label for="floatingInput">Comments</label>
                <button type="button" class="btn btn-secondary" style="float:right;">Submit</button>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
?>