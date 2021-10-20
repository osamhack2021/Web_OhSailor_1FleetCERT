<?php
        session_start();
        if(!$_SESSION['userid']){
                echo '<script>location.href="/login";</script>';
        }else{
            $connect = mysqli_connect('localhost', 'dbadmin', 'tooringa', 'ohsailor') or die ("connect fail");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>오!수병 | 메인</title>
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
    <!--게시판 부분 미들-->
    <div class="container">
    
        <div class="d-flex flex-wrap justify-content-center py-3 mb-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">제목</th>
                        <th scope="col">작성자</th>
                        <th scope="col">날짜</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query ="select * from evaluation_board order by num desc";
                        $result = $connect->query($query);
                        $total = mysqli_num_rows($result);

                        while($rows = mysqli_fetch_assoc($result)){
                    ?>
                    <tr style="cursor:pointer;" onclick="javascript:location.href='./view?num=<?php echo $rows['num']?>'">
                        <th scope="row"><?php echo $rows['num']?></th>
                        <td><?php echo $rows['title']?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['date']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <div class="container" style="width:100%;">
                <button type="button" class="btn btn-outline-secondary" onclick="javascript:location.href='./write'" style="float:right;">글쓰기</button>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
?>
