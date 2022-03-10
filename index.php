
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
    <title>Red Store - Nơi thể hiện cá tính của bạn</title>
</head>
<body>
    <div class="header">

        <div class="container">
            <div class="nav-bar">
                <div class="logo">
                   <a href="index.php"><img src="images/logo.png" alt="" width="125px"></a> 
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

            <div class="row">
                <div class="col-2">
                    <h1>Tạo cho bạn một <br/>phong cách mới</h1>
                    <p>Chẳng có công thức bí mật nào cả. Tôi kiên định, tôi tập luyện chăm chỉ và <br /> tôi luôn đặt mục tiêu trở thành 
                        người giỏi nhất</p>
                    <a href="products.php" class="btn">Khám Phá &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    
    <!-- featured categories -->

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/category-3.jpg" alt="">
                </div>
            </div>
        </div> 
    </div>

                <!-- featured products -->

    <div class="small-container">
        <h2 class="title">Sản phẩm nổi bật</h2>
        <div class="row">
            <div class="col-4">
                <a href="product-details.php"><img src="images/buy-1.jpg" alt=""></a>
                <a href="product-details.php"><h4>ÁO PUMA ACTIVE BIG LOGO</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>135.000đ</p>
            </div>

            <div class="col-4">
                <img src="images/Sản phẩm/featured2.jpg" alt="">
                <h4>GIÀY TẬP FITNESS 520 NAM</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>795.000đ</p>
            </div>

            <div class="col-4">
                <img src="images/Sản phẩm/featured3.jpg" alt="">
                <h4>ÁO KHOÁC THỂ THAO NAM </h4>
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
                <img src="images/Sản phẩm/featured4.jpg" alt="">
                <h4>GIÀY TẬP FITNESS 100 NỮ</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>495.000đ</p>
            </div>
        </div>

                <!-- Sản phẩm moi nhất -->
        <h2 class="title">Sản phẩm mới nhất</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/Sản phẩm/latest1.jpg" alt="">
                <h4>ÁO BRA FITNESS 900 KHÓA</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>395.000đ</p>
            </div>

            <div class="col-4">
                <img src="images/Sản phẩm/latest2.jpg" alt="">
                <h4>QUẦN GYM 120 NAM</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>375.000đ</p>
            </div>

            <div class="col-4">
                <img src="images/Sản phẩm/latest3.jpg" alt="">
                <h4>ÁO KHOÁC FITNESS FVE 100</h4>
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
                <img src="images/Sản phẩm/latest4.jpg" alt="">
                <h4>QUẦN SHORT FITNESS NỮ</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>445.000đ</p>
            </div>
        </div>

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

    <!-- offer -->

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/exclusive.png" class="offer-img" alt="">
                </div>
                <div class="col-2">
                    <p>Độc quyền duy nhất tại RedStore</p>
                    <h1>Smart Band 4</h1>
                    <small>
                    Xiaomi Mi Smart Band 4 là thế hệ vòng đeo tay thông minh đột phá nhất từ trước đến nay
                     của Xiaomi, với màn hình cảm ứng màu AMOLED đầu tiên; khả năng theo dõi sức khỏe và vận
                      động hoàn hảo; cùng thời lượng pin 20 ngày.
                    </small>
                    <a href="" class="btn">Mua ngay &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Tôi đã mua đồ ở nhiều cửa hàng nhưng đây là lần đầu tiên
                       tôi thấy sản phẩm có giá tốt và chất lượng như vậy.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-1.png" alt="">
                    <h3>Thuỳ Dung</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Các mẫu mã ở đây rất đa dạng. Giá tiền thì phù hợp cho tất cả 
                        người .Chắc chằn khi có dịp tôi sẽ quay lại
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-2.png" alt="">
                    <h3>Doãn Hiếu</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Tôi rất thích quần áo tập gym và fitness ở đây. Chất liệu vải rất tốt.
                        Nếu có dịp chắc chắn tôi sẽ quay lại
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-3.png" alt="">
                    <h3>Triệu Vy</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- brands -->

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col-5">
                    <img src="images/logo1.png">
                </div>
                <div class="col-5">
                    <img src="images/logo2.png">
                </div>
                <div class="col-5">
                    <img src="images/logo3.png">
                </div>
                <div class="col-5">
                    <img src="images/logo4.png">
                </div>
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
</body>
</html>