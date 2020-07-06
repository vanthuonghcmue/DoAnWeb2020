<?php require_once __DIR__ . "/../autoload/autoload.php";?>
<!DOCTYPE html>
<html>

<head>

    <title>Nội thất| Ngoại thất và Decor| Hàng xuất khẩu cao cấp</title>

    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/redirect?Id=CvmsVv9asuSiOaRBBz9urpS909ixNzNqI37%2b8O1yQr4%3d">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Quicksand:wght@500&display=swap"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/973a1060ee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../vendors/fonts/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/styles.css">
    <link rel="stylesheet" href="../vendors/css/bootstrap.css">
    <link rel="stylesheet" href="../resources/css/queries.css">
    <link rel="stylesheet" href="../vendors/css/bootstrap-grid.css">
    <script src="../vendors/js/jquery-3.5.0.js"></script>



</head>

<body>
    <!-- Begin head  -->
    <div class="sticky">
        <nav>
            <a href="#Home"><img class="logo"
                    src="../resources/img/logoCong_ty_Co_Phan_Kien_Truc_Xay_Dung_song_phat.jpg.png" alt="logo"></a>
            <div>
                <ul class="main-nav">
                    <?php 
                         $category = DataProvider::ExecuteQuery( "SELECT id, name FROM category");
                        while($loai = mysqli_fetch_array($category)){
                        $type = DataProvider::ExecuteQuery( "SELECT * FROM `type` WHERE `category` = {$loai['id']}");
                        while($type1 = mysqli_fetch_array($type)){
                            $chuoi = <<< EOD
                    <li><a class="a" href="">  {$loai['name']}</a>
                        <ul class="submenu">
                            <li><a href=""> {$type1['name']}</a></li>
                            
                        </ul>
                    </li>
                
                EOD;
                echo $chuoi;
            }
            }
                    ?>
                    <a class="fas fa-shopping-cart " href="#" id="icoi"></a>
                    <a class="far fa-user " href="../pages/login2.html" id="icoi"></a>
                </ul>
            </div>
            <div class="mobile-nav-icon"><i class="fa fa-bars "></i></div>
        </nav>
    </div>
    <div class="clearfix"> </div>
    <div id="SITE_HEADER-placeholder"></div>