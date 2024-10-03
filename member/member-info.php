<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>個人資料</title>

    <script src="https://kit.fontawesome.com/4709a6e71d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/header_style.css">
    <link rel="stylesheet" type="text/css" href="../css/info_style.css">
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
            <h1>個人資料</h1>
            <div class="table">
                <table>
                    <tbody>
                        <tr>
                            <td>使用者名稱</td>
                            <td><?php echo $_COOKIE['username'] ?></td>
                        </tr>
                        <tr>
                            <td>密碼</td>
                            <td>********</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>raymand.h272@gmail.com</td>
                        </tr>
                        <tr>
                            <td>收件人姓名</td>
                            <td>未設定</td>
                        </tr>
                        <tr>
                            <td>收件地址</td>
                            <td>未設定</td>
                        </tr>
                        <tr>
                            <td>手機號碼</td>
                            <td>未設定</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=buttons>
                <a href="./info-edit.php"><button class="edit"><i class="fa-solid fa-pen"></i>　修改個人資料</button></a>
                <a href="./member-center.php"><button class="last-page"><i class="fa-solid fa-arrow-left"></i>　回上一頁</button></a>
            </div>
        </div>
    </div>
</body>

</html>