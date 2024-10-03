<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>個人資料修改</title>

    <script src="https://kit.fontawesome.com/4709a6e71d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="./css/header_style.css">
    <link rel="stylesheet" type="text/css" href="./css/info-edit-style.css">

    <script src="./js/info-edit.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="header-icon">
                <div class="block"></div>
                <div class="LOGO">
                    <a href="./home.php"><img src="./images/logo.png" width="110px" height="110px" alt="LOGO"></a>
                </div>
                <div class="ICON">
                    <a href="./search.php"><i class="fa-solid fa-magnifying-glass fa-2x"></i></a>
                    <a href="./cart.php"><i class="fa-solid fa-cart-shopping fa-2x"></i></a>
                    <a href="./member-center.php"><i class="fa-solid fa-user fa-2x"></i></a>
                    <i class="count"><!-- 購物車數量的值 --></i>
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
            <h1>個人資料修改</h1>
            <form action="" method="POST" name="form-edit" id="form">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="title">使用者名稱<label class="error" for="username"></label></td>
                            <td class="inputs">
                                <input type="text" name="username" maxlength="12"> (最多12個字元)
                            </td>
                        </tr>
                        <tr>
                            <td class="title">密碼<label class="error" for="password"></label></td>
                            <td class="inputs">
                                <input type="password" name="password" maxlength="20"> (8~20個字元)
                            </td>
                        </tr>
                        <tr>
                            <td class="title">Email<label class="error" for="mail"></label></td>
                            <td class="inputs">
                                <input type="email" name="mail" maxlength="40"> (最多40個字元)
                            </td>
                        </tr>
                        <tr>
                            <td class="title">收件人姓名</td>
                            <td class="inputs">
                                <input type="text" name="name" maxlength="10"> (最多10個字元)
                            </td>
                        </tr>
                        <tr>
                            <td class="title">收件地址</td>
                            <td class="inputs">
                                <input type="text" name="address" maxlength="50"> (最多50個字元)
                            </td>
                        </tr>
                        <tr>
                            <td class="title">手機號碼</td>
                            <td class="inputs">
                                <input type="text" name="phone" maxlength="12"> (最多12個字元)
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="buttons">
                    <button type="submit"><i class="fa-solid fa-check"></i>　確認</button>
                    <a href="./member-info.php"><button><i class="fa-solid fa-xmark"></i>　取消</button></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>