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
        if(isset($_SESSION['cart'])){
           $session_array_id = array_column($_SESSION['cart'],'id');


           if(!in_array($_GET['productID'],$session_array_id)){
            $session_array = array(
                'id' => $id,
                'soluong' => $sl,
                'price' => $row['price'],
                'name' => $row['name'],
                'img' => $row['img']
            );
            $_SESSION['cart'][] = $session_array;
           }
        }
        else{
            $session_array = array(
                'id' => $id,
                'soluong' => $sl,
                'price' => $row['price'],
                'name' => $row['name'],
                'img' => $row['img']
            );
            $_SESSION['cart'][] = $session_array;
           
        }
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
                $total =0;
                if(!empty($_SESSION['cart'])){
                    foreach ($_SESSION['cart'] as $key => $value){
                        $rerult = substr($value['img'],3);
                            ?>
                                
                                <tr>
                                    <td>
                                        <div class="cart-info">
                                            <?php echo ' <img src="'.$rerult.'"> '?>
                                            <div>
                                                <p><?php echo $value['name'] ?></p>
                                                <small>Giá : <?php echo $value['price'] ?></small>
                                                <br>
                                                <a href="cart.php?remove=<?php echo $value['id'] ?>">
                                                    <button style="color: #ff523b;font-size: 12px;border:none;background-color: #fff;cursor: pointer;">Remove</button>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td> <input type="number" value="<?php echo $value['soluong'] ?>"></td>
                                    <td><?php echo number_format( $value['soluong']*$value['price']) ?></td>
                                </tr>
                                
                            <?php
                        $total = $total + $value['price'] * $value['soluong'];
                    }
                }
                else{
                    echo 'Không có sản phẩm nào trong giỏ hàng';
                }
            ?>  
            <?php 
                if(isset($_GET['remove'])){
                    $id = $_GET['remove'];
                    foreach($_SESSION['cart'] as $key => $value){
                        if($value['id'] == $id){
                            unset($_SESSION['cart'][$key]);
                        }
                        header('Location: cart.php ');
                    }
                }
            ?>   
                
                
            </table>

            <div class="total-price">
                <table> 
                    <tr>
                        <td>Tạm tính</td>
                        <td><?php echo number_format($total) ?></td>
                    </tr>
                    <tr>
                        <td>Giao hàng</td>
                        <td>30.000đ</td>
                    </tr>
                    <tr>
                        <td>Tổng</td>
                        <td><?php echo number_format( $total + 30000)?></td>
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