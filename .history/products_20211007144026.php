
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
    <script type="text/javascript">
        function view_id(id)
        {
                window.location.href='product-details.php?edit_id='+id;
        }

</script>
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


    <div class="small-container">
        <div class="row row-2">
            <h2>Tất cả sản phẩm</h2>
            <select name="" id="">
                <option value="">Sắp xếp theo</option>
                <option value="">Giá (cao - thấp)</option>
                <option value="">Giá (thấp - cao)</option>
                <option value="">Bán chạy</option>
                <option value="">Mới nhất</option>
            </select>
        </div>
       
          
        <div class="row">
             <?php 
            include_once './Admin/connect.php';
            $sql_query= "SELECT * FROM product";

            $result_set=mysqli_query($links, $sql_query);
            if(mysqli_num_rows($result_set)>0)
            {
                while($row=mysqli_fetch_row($result_set))
                {
                    $rerult = substr($row[3],3);
                    ?>
                    
                        <div class="col-4">
                            <?php echo ' <a href=""><img src="'.$rerult.'" alt=""> </a>';?>
                            <a href="product-details.php?productID=<?php echo $row[0]?>"><h4><?php echo $row[2]?></h4></a> 
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p><?php echo number_format($row[10]).'đ' ?></p>
                        </div>
                    <?php
                }
          }
          else
          {
              ?>
              <tr>
              <th colspan="13">No Data Found !</th>
              </tr>
              <?php
          }
      ?>
        <?php
        $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:8;
        $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
        $products = mysqli_query($links, "SELECT * FROM `product` ORDER BY `productID` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($links, "SELECT * FROM `product`");
        $totalRecords = $totalRecords->num_rows;
        $totalPages = ceil($totalRecords / $item_per_page);
        ?>
         <?php
                include './pagination.php';
        ?>
        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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