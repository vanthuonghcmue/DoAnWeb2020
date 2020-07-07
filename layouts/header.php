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
                    $sql = "SELECT * FROM `category`";
                    $category = DataProvider::ExecuteQuery($sql);
                    while ($loai = mysqli_fetch_array($category)) {

                        $chuoi = <<< EOD
                          <li><a class="a" href="/DoAnWeb2020/public/pages/show-row.php?id={$loai['id']}">  {$loai['name']}</a>
                          <ul class="submenu">
                          EOD;
                        echo $chuoi;

                        $sql1 = "SELECT * FROM `type` WHERE `category` = {$loai['id']}";
                        $type = DataProvider::ExecuteQuery("$sql1");

                        while ($type1 = mysqli_fetch_array($type)) {
                            $chuoi1 = <<< EOD
                      
                            <li><a href="/DoAnWeb2020/public/pages/show-row.php?id={$type1['id']}"> {$type1['name']}</a></li>                                                                                  
                     EOD;
                            echo $chuoi1;
                        }
                        echo " </ul>";
                    }
                    echo   "</li>";
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