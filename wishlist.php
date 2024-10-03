<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>願望清單</title>

    <script src="https://kit.fontawesome.com/4709a6e71d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/header_style.css">
    <link rel="stylesheet" type="text/css" href="./css/wishlist_style.css">
    <style>

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-icon">
                <div class="block"></div>
                <div class="LOGO">
                    <a href="./home.php"><img src="./images/logo.png" width="110px"  height="120" width="155"></a>
                </div>
                <div class="ICON" style="position: relative;">
                    <a href="./search.php"><i class="fa-solid fa-magnifying-glass fa-2x"></i></a>
                    <a href="./cart.php"><i class="fa-solid fa-cart-shopping fa-2x"></i></a>
                    <i class="count"><!-- 購物車數量的值 --></i>
                    <!-- 放到主文件 -->
                    <a href="./member-center.php"><i class="fa-solid fa-user fa-2x"></i></a>
                </div>
            </div>

            <div class="category-bar">
                <ul class="category">
                    <li><a href="./home.php">首頁</a></li>
                    <li><a href="./search.php">餅乾</a></li>
                    <li><a href="./search.php">飲品</a></li>
                </ul>
            </div>
        </div>


        <div class="content">
            <h1>願望清單</h1>
            <table class="table">
                <tr>
                    <th class="t1">產品列表</th>
                    <th class="t2"></th>
                    <th class="t3">價格</th>
                    <th class="t4">添加到購物車</th>
                    <th class="t5">刪除</th>
                </tr>
                <tr>
                    <td class="t1"><img src="" alt="" height="150px" width="150px"></td>
                    <td class="t2"><a href=""></a></td>
                    <td class="t3"><a href=""></a></td>
                    <td class="t4"><button class="cart" name="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> 加到購物車</button></td>
                    <td class="t5"><button class="del" name="del"><i class="fa fa-times" aria-hidden="true"></i> 刪除</button></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>