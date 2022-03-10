<?php
    include_once './Admin/connect.php';
    include ".Admin/products.php" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/2defadb02e.js"></script>
    <title>Sản phẩm - Red Store - Nơi thể hiện cá tính của bạn</title>
</head>
<body>

        <div class="container">
            <div class="nav-bar">
                <div class="logo">
                    <img src="images/logo.png" alt="" width="125px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="products.php">SẢN PHẨM</a></li>
                        <li><a href="">XEM THÊM</a></li>
                        <li><a href="">LIÊN HỆ</a></li>
                        <li><a href="account.php">TÀI KHOẢN</a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" alt=""></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>

        <!-- Single product details -->
        <div class="small-container single-product">
            <div class="row">
                <?php 
                        $id = -1;
                        if (isset($_GET["productID"])) {
                            $id = intval($_GET['productID']);
                        }
                        $sql = "select * from product where productID = $id";
                        $query = mysqli_query($links,$sql);
                        if(mysqli_num_rows($query)>0){
                        while ( $row = mysqli_fetch_array($query) ) {
                            $rerult = substr($row[3],3);
                            $rerult1 = substr($row[4],3);
                            $rerult2 = substr($row[5],3);
                            $rerult3 = substr($row[6],3);
                            $rerult4 = substr($row[7],3);
                    ?>
                        <div class="col-2">
                        <?php echo ' <img src="'.$rerult.'" alt="" width="100%" id="ProductImg">';?>
                        <div class="small-img-row">
                                <div class="small-img-col">
                                    <?php echo ' <img src="'.$rerult1.'" alt="" width="100%" class="small-img">';?>

                                </div>
                                <div class="small-img-col">
                                    <?php echo ' <img src="'.$rerult2.'" alt="" width="100%" class="small-img">';?>
                                </div>
                                <div class="small-img-col">
                                    <?php echo ' <img src="'.$rerult3.'" alt="" width="100%" class="small-img">';?>
                                </div>
                                <div class="small-img-col">
                                    <?php echo ' <img src="'.$rerult4.'" alt="" width="100%" class="small-img">';?>
                                </div>
                            </div>
                            <!-- <img src="images/gallery-1.jpg" width="100%" id="ProductImg">
                            <div class="small-img-row">
                                <div class="small-img-col">
                                    <img src="images/gallery-1.jpg" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="images/gallery-2.jpg" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="images/gallery-3.jpg" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="images/gallery-4.jpg" width="100%" class="small-img">
                                </div>
                            </div> -->

                    
                </div>

                <div class="col-2">
               
                        <p>Trang chủ / Áo</p>
                        <h1><?php echo $row[2]?></h1>
                        <h4><?php echo $row[10].' đ'?></h4>
                        <select name="" id="">
                            <option value="">Chọn Size</option>
                            <option value="">XXL</option>
                            <option value="">XL</option>
                            <option value="">L</option>
                            <option value="">M</option>
                            <option value="">S</option>
                        </select>
                        <input type="number" value ="1" name="sl">
                        <a href="cart.php?productID=<?php echo $row[0]?>" class="btn" name="themgiohang">Thêm vào giỏ hàng  </a>
                        <h3>Chi tiết sản phẩm <i class="fa fa-indent" aria-hidden="true"></i></h3>
                        <br>
                        <p><?php echo $row[8]?></p>
                    <?php }} ?>
                    

                    <!-- <p>Trang chủ / Áo</p>
                    <h1>Áo PUMA Active Big Logo Tee</h1>
                    <h4>499.000đ</h4>
                    <select name="" id="">
                        <option value="">Chọn Size</option>
                        <option value="">XXL</option>
                        <option value="">XL</option>
                        <option value="">L</option>
                        <option value="">M</option>
                        <option value="">S</option>
                    </select>
                    <input type="number" value ="1">
                    <a href="" class="btn">Thêm vào giỏ hàng  </a>
                    <h3>Chi tiết sản phẩm <i class="fa fa-indent" aria-hidden="true"></i></h3>
                    <br>
                    <p>Thành phần vải: 100% Polyester, thiết kế áo thun tay ngắn nam tính, năng động. 
                        Form dáng ôm nhẹ nhàng thoải mái, phối logo Puma Cat in nổi bật trước ngực</p> -->
                </div> 
            </div>
        </div>

        <!-- title -->
            <div class="small-container">
                <div class="row row-2">
                    <h2>Sản phẩm liên quan</h2>
                    <p>Xem thêm</p>
                </div>
            </div>

        <!-- products -->

    <div class="small-container">
       
        <div class="row">
            <div class="col-4">
                <img src="images/Sản phẩm/latest5.jpg" alt="">
                <h4>QUẦN SHORT FITNESS NAM</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>375.000đ</p>
            </div>

            <div class="col-4">
                <img src="images/Sản phẩm/latest6.jpg" alt="">
                <h4>QUẦN SHORT GYM NAM </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>395.000đ</p>
            </div>

            <div class="col-4">
                <img src="images/Sản phẩm/latest7.jpg" alt="">
                <h4>QUẦN DÀI FITNESS 500 NỮ </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>395.000đ</p>
            </div>

            <div class="col-4">
                <img src="images/Sản phẩm/latest8.jpg" alt="">
                <h4>ÁO THUN FITNESS 500 NAM</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>375.000đ</p>
            </div>
        </div>
     
    </div>

    


    <!-- footer -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Tải App</h3>
                    <p>Tải App cho điện thoại Android và iOS</p> 
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>

                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Mục đích của chúng tôi là làm cho niềm vui và lợi
                        ích của Thể thao có thể tiếp cận được với nhiều
                        người một cách bền vững</p> 
                </div>

                <div class="footer-col-3">
                    <h3>Liên Kết</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affilicate</li>
                    </ul>
                </div>

                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2021  - Red Store</p>
        </div>
    </div>

    <!-- JS for responsive -->

    <script>
        var MenuItems = document.getElementById("MenuItems")
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
                MenuItems.style.maxHeight = "200px";
            }
            else{
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script> 

        <!-- JS for product gallery -->

    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");
        SmallImg[0].onclick = function() {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function() {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function() {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function() {
            ProductImg.src = SmallImg[3].src;
        }
    </script>
</body>
</html>