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


        <!-- account page -->
        <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/image1.png" width = "100%">
                    </div>

                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Đăng nhập</span>
                                <span onclick="register()">Đăng kí</span>
                                <hr id="Indicator">
                            </div>

                            <form action="" id="LoginForm">
                                <input type="text" placeholder="Tài khoản">
                                <input type="password" placeholder="Mật khẩu">
                                <button type="submit" class="btn">Đăng nhập</button>
                                <a href="">Quên mật khẩu</a>
                            </form>

                            <form action="" id="RegForm">
                                <input type="text" placeholder="Tên tài khoản">
                                <input type="email" placeholder="Email">
                                <input type="password" placeholder="Mật khẩu">
                                <input type="password" placeholder="Nhập lại mật khẩu">
                                <button type="submit" class="btn">Đăng kí</button>
                            </form>
                        </div>
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

    <!-- JS for login,register -->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");
        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(135px)"; 
        }
        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(8px)"; 
        }

    </script>
</body>
</html>