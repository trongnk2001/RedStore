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
<?php 
                $error = false;
                $success = false;
                 if(isset($_GET['action'])){
                     $name = $_POST['name'];
                     $address = $_POST['address'];
                     $city = $_POST['city'];
                     $district = $_POST['district'];
                     $village = $_POST['village'];
                     $tel = $_POST['tel'];
                     switch($_GET['action']){
                         case "submit":
                            if(isset($_POST['update_click'])){
                                echo "Xin lỗi tính năng này chưa cập nhật";
                            }
                            elseif (isset($_POST['update_checkout'])){
                                     // echo '<pre>';
                                     // var_dump($_POST);
                                     // echo '</pre>';
                                
                                    // echo '<pre>';
                                    
                                    // var_dump($_SESSION['cart'][$i]);
                                    // echo '</pre>';
                                
                                // // var_dump($_POST["name"]) ;
                                 if (empty($_POST['name'])) {
                                     $error = "Bạn chưa nhập tên của người nhận";
                                 } elseif (empty($_POST['tel'])) {
                                     $error = "Bạn chưa nhập số điện thoại người nhận";
                                 } elseif (empty($_POST['address'])) {
                                     $error = "Bạn chưa nhập địa chỉ người nhận";
                                 }elseif (empty($_POST['city'])){
                                     $error = "Bạn chưa nhập thành phố !";
                                 }elseif (empty($_POST['district'])){
                                     $error = "Bạn chưa nhập quận/huyện !";
                                 }elseif (empty($_POST['village'])){
                                     $error = "Bạn chưa nhập xã/phuong !";
                                 }
                                 elseif (empty($_POST['soluong'])){
                                    $error = "Giỏ hàng rỗng";
                                }
                                if ($error == false && !empty($_POST['soluong'])) {
                                    for($i = 0;$i<count($_SESSION['cart']);$i++){
                                    $id_post = $_SESSION['cart'][$i]['id'];
                                    echo '<pre>';
                                    var_dump($id_post);
                                    echo '</pre>';
                                    $products = mysqli_query($links, "SELECT * FROM product WHERE productID = $id_post");
                                    $total = 0;
                                    $orderProducts = array();
                                    $row = mysqli_fetch_array($products);
                                    $orderProducts[] = $row;
                                    $total += $row['price'] * $_POST['soluong'];
                                    $insertCus = mysqli_query($links, "INSERT INTO customer(cusID,name,adress,tel) VALUE ('','$name','$address.$village.$district.$city','$tel')");
                                    // $cusID = mysqli_query($links, "SELECT cusID FROM `customer` ORDER BY cusID DESC LIMIT 1");
                                    // sleep(5);
                                    // $add = mysqli_fetch_all($cusID);
                                    // var_dump($add[0]);
                                    $last_id = mysqli_insert_id($links);
                                    $mysqltime = date ("Y-m-d H:i:s", $phptime);
                                    $insertOrder = mysqli_query($links, "INSERT INTO `orderinf` (`orderID`, `customerID`, `total`, `orderDate`, `status`) VALUES ('', '$last_id', '$total', '$mysqltime', '1')");
                                    $last_order = mysqli_insert_id($links);
                                    $insertString = "";
                                    $gia = $_POST['giathanh'];
                                    $soluong = $_POST['soluong'];
                                    foreach ($orderProducts as $key => $product) {
                                        $insertString .= "('', '$last_order', '$id_post', '$row[10]', '$soluong','$total')";
                                        if ($key != count($orderProducts) - 1) {
                                            $insertString .= ",";
                                        }
                                    }
                                    $insertOrderDetails = mysqli_query($links, "INSERT INTO `orderdetails` (`id`, `orderID`, `productID`, `price`, `quantity`, `total`) VALUES " . $insertString . ";");
                                }   
                                    $success = "Đặt hàng thành công";
                                    unset($_SESSION['cart']);
                                }
                                //  echo '<p style="text-align:center">'.$error.'</p>';
                            }
                        
                }}
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
        <form action="cart.php?action=submit"  method="post">
        <!-- cart items details -->
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>ID</th>
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
                                    <td> <input name="id" type="text" value="<?php echo $value['id'] ?>" style="border: none;width: 30px ;"> </td>
                                    <td>
                                        <div class="cart-info">
                                            <?php echo ' <img src="'.$rerult.'"> '?>
                                            <div>
                                                <p name="ten"><?php echo $value['name'] ?></p>
                                                <small name="giathanh">Giá : <?php echo $value['price'] ?></small>
                                                <br>
                                                <a href="cart.php?remove=<?php echo $value['id'] ?>">Remove
                                                    <!-- <button style="color: #ff523b;font-size: 12px;border:none;background-color: #fff;cursor: pointer;">Remove</button> -->
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td> <input name="soluong" type="number" value="<?php echo $value['soluong'] ?>" style="width: 40px;height: 30px;padding: 5px;"></td>
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
                        header('Location:cart.php');
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
                        <td>30.000</td>
                    </tr>
                    <tr>
                        <td>Tổng</td>
                        <td><?php echo number_format( $total + 30000)?></td>
                    </tr>
                </table>
            </div>
            <form action="">
            <div class="small-container" style="padding:0px 0px">
                <h3 style="padding: 0px 405px;background-color: #ff523b;">Thông tin giao hàng</h3>
                <?php if (!empty($error)) { ?> 
                <div id="notify-msg" style="text-align: center; margin-top: 20px;font-weight: 600;">
                    <?= $error ?>
                </div>
            <?php } elseif (!empty($success)) { ?>
                <div id="notify-msg" style="text-align: center; margin-top: 20px;font-weight: 600;">
                    <?= $success ?>. 
                </div>
            <?php } ?>
                <div class="row" style="align-items: initial;">
                    <div class="col-2 inf" style="display: flex;align-items: center;flex-direction: column;">
                            <p>Tên</p>
                            <input type="text" name="name" placeholder="Họ Tên" style="width:300px">
                            <p>Số điện thoại</p>
                            <input type="text" name ="tel" placeholder="Xin vui lòng điền số điện thoại của bạn" style="width:300px">
                    </div>
                    <div class="col-2 inf" style="display: flex;align-items: center;flex-direction: column;">
                            <p>Địa chỉ nhận hàng</p>
                            <input type="text" name ="address" placeholder="Vui lòng điền địa chỉ của bạn">
                            <p>Tỉnh/ Thành phố</p>
                            <input type="text" name ="city" placeholder="Vui lòng điền tỉnh/ thành phố">
                            <p>Quận/ Huyện</p>
                            <input type="text" name ="district" placeholder="Vui lòng điền quận/ huyện">
                            <p>Phường/ Xã</p>
                            <input type="text" name = "village" placeholder="Vui lòng điền phường/ xã">
                        <div class="buy" style="text-align: center;margin-left: -30px;float:initial">
                        <input  type="submit" name="update_click" value="Cập nhật &#8635" style="display: inline-block;background: #4CAF50;color: #fff;padding: 8px 30px;margin: 30px 0;border-radius: 30px;transition: background 0.5s;border: none;cursor: pointer;height:32px;width:131px ;">
                        <input  type="submit" name="update_checkout" value="Đặt hàng &#8594" style="display: inline-block;background: #ff523b;color: #fff;padding: 8px 30px;margin: 30px 0;border-radius: 30px;transition: background 0.5s;border: none;cursor: pointer;height:32px;width:131px ;">
                        </div>
                    </div>
                </div>  
            </div>
            </form>
            <form 
            class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="xulithanhtoanmomo_atm.php">
                <input type="hidden" value="<?php echo number_format($total)?>" name ="total">
                <input 
                style="display: inline-block;background: #ff523b;color: #fff;padding: 8px 30px;margin: 30px 0;border-radius: 30px;transition: background 0.5s;border: none;cursor: pointer;height:32px;width:131px ;"
                type="submit" name="momo" value="Thanh toán MOMO ATM">
            </form>
            <!-- <div class="buy">
                    <a href="checkout.php" class="btn" style="padding: 8px 20px;">Thanh toán &#8594;</a>
            </div> -->
        </div>
        </form>
        
           
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