<?php
    if(!isset($_COOKIE['username']))
        header("Location: ./login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>

    <script src="https://kit.fontawesome.com/4709a6e71d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/header_style.css">
    <link rel="stylesheet" type="text/css" href="../css/member-center.css">

</head>

<body>
    <div class="container">
        <div class="header">
            <div class="header-icon">
                <div class="block"></div>
                <div class="LOGO">
                    <a href="../home.php"><img src="../images/logo.png"  height="120" width="155" alt="LOGO"></a>
                </div>
                <div class="ICON">
                    <a href="../search.php"><i class="fa-solid fa-magnifying-glass fa-2x"></i></a>
                    <a href="../cart.php"><i class="fa-solid fa-cart-shopping fa-2x"></i></a>
                    <a href="../member-center.php"><i class="fa-solid fa-user fa-2x"></i></a>
                    <i class="count"><!-- 購物車數量的值 --></i>
                </div>
            </div>

            <div class="category-bar">
                <ul class="category">
                    <li><a href="../home.php">首頁</a></li>
                    <li><a href="../search.php">餅乾</a></li>
                    <li><a href="../search.php">飲品</a></li>
                </ul>
            </div>
        </div>


        <div class="content">
            <h1>會員中心<?php if(isset($_COOKIE['username'])) echo "(".$_COOKIE['username'].")" ?></h1>
            <div class="member-actions">
                <div class="actions">
                    <a href="./member-info.php"><button><i class="fa-solid fa-user fa-2x"></i></br></br>個人資料</button></a>
                    <a href="./cart.php"><button><i class="fa-solid fa-cart-shopping fa-2x"></i></br></br>購物車</button></a>
                    <a href="./wishlist.php"><button><i class="fa-solid fa-face-grin-hearts fa-2x"></i></br></br>願望清單</button></a>
                    <a href="./member-orders.php"><button><i class="fa-solid fa-rectangle-list fa-2x"></i></br></br>歷史訂單</button></a>
                </div>
            </div>
            <div class="logout">
                <a href="./login.php"><button><i class="fa-solid fa-right-from-bracket"></i>  登出</button></a>
            </div>
        </div>
    </div>
</body>

</html>