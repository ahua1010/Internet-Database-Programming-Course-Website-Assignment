<?php
    if(isset($_COOKIE['username']))
        setcookie("username", "", time()-1);
    if(isset($_POST['password'])) {
        setcookie("username", $_POST['username'], time()+3600);
        header("Location: ./index.php"); 
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>

    <script src="https://kit.fontawesome.com/4709a6e71d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="../css/header_style.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">

    <script src="./js/login.js"></script>
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
            <h1>會員登入</h1>
            <form name="form1" action="" method="POST" id="form1">
                <input type="text" name="username" maxlength="40" placeholder="帳號或電子信箱">
                <label for="username" class="error"></label>
                <input type="password" name="password" maxlength="16" placeholder="密碼">
                <label for="password" class="error"></label>
                <button type="submit" class="login">登入  <i class="fa-solid fa-right-to-bracket"></i></button>
            </form>
            <p>
                還沒有帳號? <a href="./member-register.php">註冊帳號</a>
            </p>
        </div>
    </div>
</body>

</html>