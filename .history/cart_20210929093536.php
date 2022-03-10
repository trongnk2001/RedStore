<?php
    session_start();
    include_once './Admin/connect.php';
    // thêm số luong 
    // tru số luong 
    // xoá sản phẩm
    // thêm sản phẩm vào giỏ hàng
    if(isset($_POST['themgiohang'])){
        $id = $_GET['productID'];
        $sl = $_POST['sl'];
        $sql_query = "SELECT * FROM product WHERE productID='".$id."'";
        $query = mysqli_query($links,$sql_query);
        $row = mysqli_fetch_array($query);
        if(isset($_SESSION['cart'][$id])){
            $qty = $_SESSION['cart']['ten'.$id] + $sl;
        }
        else{
            $qty = $sl;
        }
        $_SESSION['cart'][$id]=$qty;
        print_r($_SESSION['cart']);
        
        // if($row){
        //     // $new_Product = array(array('tensanpham'=>$row['name'], 'id'=>$id, 'soluong'=>$soluong, 'giasp'=>$row['price'], 
        //     // 'img'=>$row['img']));
        //     // //kiem tra sessions gio hàng tồn tại
                
        //     // if(isset($_SESSION['cart'])){
        //     //     $found = false;
        //     //     foreach($_SESSION['cart'] as $cart_item){
        //     //         if($cart_item['id']!=$id){
        //     //             $product[]= array('tensanpham'=>$cart_item['name'], 'id'=>$cart_item['id'], 'soluong' =>$soluong + 1, 'giasp'=>$cart_item['price'], 
        //     //             'img'=>$cart_item['img']);
        //     //             $_SESSION['cart'] = $product;
        //     //             $found = false;
        //     //         }
        //     //         else{
        //     //             $product[]= array('tensanpham'=>$cart_item['name'], 'id'=>$cart_item['id'], 'soluong'=>$soluong, 'giasp'=>$cart_item['price'], 
        //     //             'img'=>$cart_item['img']);
        //     //             $found = true;
        //     //         }
        //     //     }
        //     //     if($found == false){
        //     //         $_SESSION['cart'] =array_merge($product,$new_Product);
        //     //     }
        //     //     else{
        //     //         $_SESSION['cart'] = $product;
        //     //     }
        //     // }
        //     // else{
        //     //     $_SESSION['cart'] = $new_Product;
        //     // }
        //     if(!isset($_SESSION['cart'])){
        //         $_SESSION['cart'] = array();
        //     }
        //     if (isset($_GET['productID'])){
        //         foreach($_POST['productID'] as $productID => $sl){
        //             $_SESSION['cart'][$productID] = $sl;
        //         }
        //         echo '<pre>';
        //         // print_r($_POST) ;   
        //         print_r($_SESSION['cart']);
        //     }
        //}
        // echo '<pre>';
        // print_r($_SESSION['cart']) ;
    }
    
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

        <!-- cart items details -->

        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tạm tính</th>
                </tr>
                
                <?php 
                   
                ?>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="images/buy-3.jpg" alt="">
                            <div>
                                <p>Quần thể thao Climalite</p>
                                <small>Giá : 375.000đ</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td> <input type="number" value="1"></td>
                    <td>375.000đ</td>
                </tr>
                
            </table>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Tạm tính</td>
                        <td>1.669.000đ</td>
                    </tr>
                    <tr>
                        <td>Giao hàng</td>
                        <td>30.000đ</td>
                    </tr>
                    <tr>
                        <td>Tổng</td>
                        <td>1.699.000đ</td>
                    </tr>
                </table>
            </div>
            <div class="buy">
                    <a href="checkout.php" class="btn" style="padding: 8px 20px;">Thanh toán &#8594;</a>
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