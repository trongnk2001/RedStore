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
                <img src="images/cart.png" width="30px" height="30px" alt="">
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>

        <!-- Checkout page -->

        <div class="small-container">
            <h3>Thông tin giao hàng</h3>
            <div class="row" style="align-items: initial;">
                <div class="col-2">
                    <form action="" class="inf">
                        <p>Tên</p>
                        <input type="text" placeholder="Họ Tên">
                        <p>Số điện thoại</p>
                        <input type="text" placeholder="Xin vui lòng điền số điện thoại của bạn">
                    </form>
                </div>
                <div class="col-2">
                    <form action="" class="inf">
                        <p>Địa chỉ nhận hàng</p>
                        <input type="text" placeholder="Vui lòng điền địa chỉ của bạn">
                        <p>Tỉnh/ Thành phố</p>
                        <input type="text" placeholder="Vui lòng điền tỉnh/ thành phố">
                        <p>Quận/ Huyện</p>
                        <input type="text" placeholder="Vui lòng điền quận/ huyện">
                        <p>Phường/ Xã</p>
                        <input type="text" placeholder="Vui lòng điền phường/ xã">
                    </form>
                    <div class="buy" style="text-align: center;margin-left: -30px;float:initial">
                        <button>Đặt hàng &#8594</button>
                    </div>
                </div>
            </div>
    
        </div>

    <!-- footer -->

    <div class="footer" style="margin-top: 120px;">
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
</body>
</html>