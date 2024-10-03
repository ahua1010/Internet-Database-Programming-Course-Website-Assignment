<!DOCTYPE html>
<html lang="zh_HANT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4709a6e71d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/header_style.css">
    <link rel="stylesheet" type="text/css" href="./css/home_style.css">
    <link rel="stylesheet" type="text/css" href="./css/footer_style.css">
    <title>benny的零食世界</title>

    <style>
    </style>
</head>

<body>
    <!-- 頁面選擇標頭 -->
    <div class="container">
        <div class="header">
            <div class="header-icon">
                <div class="block"></div>
                <div class="LOGO">
                    <a href="home.php"><img src="./images/logo.png" alt="LOGO" height="120" width="155"></a>
                </div>
                <div class="ICON">
                    <a href="search.php"><i class="fa-solid fa-magnifying-glass fa-2x"></i>搜尋</a>
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping fa-2x"></i>購物車</a>
                    <i class="count"><!-- 購物車數量的值 --></i>
                <a href="member/member-center.php"><i class="fa-solid fa-user fa-2x"></i>會員</a>
                </div>
            </div>

            <div class="category-bar">
                <ul class="category">
                    <li><a href="home.php">首頁</a></li>
                    <li><a href="search.php">餅乾</a></li>
                    <li><a href="search.php">飲品</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
            <!--輪播圖-->
            <div class="slide_photo">
                <img src="images/chicken.jpg" alt="ㄐㄐ">
            </div>
            <!--食品系列-->
            <div class="food">
                <h1>食品系列</h1>
                <!-- 食品清單 -->
                <ul>
                    <li class="box" style="border-top:3px solid rgba(245, 33, 33, 0.8);">
                        <!-- 方塊彩條 -->
                        <a href="food/food1.php">
                            <img src="images/food1.webp" alt="food1" title="樂事洋芋片">
                            <!-- 簡介 -->
                            <p>
                                樂事為風靡全球NO.1洋芋片品牌，每每推出新口味就受到大家熱烈的歡迎
                            </p>
                            <!-- 詳細資訊 -->
                            <div class="info">
                                <h4>樂事洋芋片</h4>
                                <span>| 49元</span>
                            </div>
                        </a>
                    </li>
                    <li class="box" style="border-top:3px solid rgba(245, 128, 33, 0.8);">
                        <a href="food/food2.php">
                            <img src="images/food2.webp" alt="food2" title="米果家庭包">
                            <p>
                                米果家庭包集結了又肥又胖的米果們大口好吃好滿足，優惠便宜值得推薦！
                            </p>
                            <div class="info">
                                <h4>米果家庭包</h4>
                                <span>| 239元</span>
                            </div>
                        </a>
                    </li>
                    <li class="box" style="border-top:3px solid rgba(8, 175, 78, 0.8);">
                        <a href="food/food4.php">
                            <img src="images/food4.webp" alt="food4" title="牛奶餅乾">
                            <p>
                                餅質鬆脆、揉合濃醇奶香與麥香，適合各年齡層。調味單純卻更自然美味。
                            </p>
                            <div class="info">
                                <h4>牛奶餅乾</h4>
                                <span>| 99元</span>
                            </div>
                        </a>
                    </li>
                    <li class="box" style="border-top:3px solid rgba(25, 46, 238, 0.8);">
                        <a href="food/food5.php">
                            <img src="images/food5.webp" alt="food5" title="oreo">
                            <p>
                                億滋國際旗下的餅乾品牌生產的一種漢堡餅乾，其銷量在同類產品中位居第一!
                            </p>
                            <div class="info">
                                <h4>oreo</h4>
                                <span>| 59元</span>
                            </div>
                        </a>
                    </li>
                    <li class="box" style="border-top:3px solid rgba(163, 162, 159, 0.8);">
                        <a href="search.php">
                            <img src="images/more1.webp" alt="food5" title="查看更多">
                            <div class="info" style="text-align: center;">
                                <p style="height: 28px;"></p>
                                <h4> 查看更多-></h4>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!--飲品系列-->
            <div class="drink">
                <h1>飲料系列</h1>
                <ul>
                    <li class="box" style="border-top:3px solid rgba(240, 198, 9, 0.8);">
                        <a href="food/food3.php">
                            <img src="images/food3.webp" alt="food1" title="福樂高鈣低脂牛奶">
                            <div>
                                <p>
                                    含珍貴牛奶鈣+維生素D3,百位醫生聯合推薦，補鈣的好選擇
                                </p>
                                <div class="info">
                                    <h4>福樂高鈣牛奶 24入</h4>
                                    <span>| 249元</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="box" style="border-top:3px solid rgba(20, 156, 2, 0.8);">
                        <a href="food/food6.php">
                            <img src="images/food6.webp" alt="food2" title="OOHA碳酸">
                            <div>
                                <p>
                                    大眾喜愛的水果風味搭配意想不到的元素，強調0糖0卡
                                </p>
                                <div class="info">
                                    <h4>OOHA碳酸 </h4>
                                    <span>| 239元</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="box" style="border-top:3px solid rgba(108, 8, 175, 0.8);">
                        <a href="food/food7.php">
                            <img src="images/food7.webp" alt="food4" title="元氣豆奶">
                            <div>
                                <p>
                                    用料純粹，實實在在好安心,每一口都是濃郁香醇,口感滑順。
                                </p>
                                <div class="info">
                                    <h4>元氣豆奶 24入 </h4>
                                    <span>| 312元</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="box" style="border-top:3px solid rgba(238, 25, 131, 0.8);">
                        <a href="food/food8.php">
                            <img src="images/food8.webp" alt="food5" title="光泉全脂保久乳">
                            <div>
                                <p>
                                    保有最香純濃郁的口感,最完整、健康的營養成份!
                                </p>
                                <div class="info">
                                    <h4>光泉全脂保久乳 </h4>
                                    <span>| 59元</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="box" style="border-top:3px solid rgba(241, 6, 6, 0.8);">
                        <a href="search.php">
                            <img src="images/more2.webp" alt="food5" title="查看更多">
                            <div class="info" style="text-align: center;">
                                <p style="height: 28px;"></p>
                                <h4> 查看更多-></h4>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <div class="mod_copyright">
                <div class="links">
                    <a href="#">關於我們</a> | <a href="#">聯繫我們</a> | <a href="#">聯繫客服</a> | 商家廣告 
                    | 營銷中心 | 代購社區 | English Site | Contact U
                </div>
                <div class="copyright">
                    地址: 彰化縣彰化市彰化師範大學第九宿舍二樓 郵政編號50016 電話: 09-66068571 
                    <br />傳真: 010-82935100 郵箱: S0954014@gm.ncue.edu.tw
                </div>
            </div>	
        </div>
    </div>



</body>

</html>