<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap -->
     <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- liên kết thư viện CDN cần thiết để sử dụng biểu đồ Morris.js -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Red Store</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Xin chào,</span>
                    <h2>Admin</h2>
                </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Trang chủ <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="report.php">Trang chính</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Quản lí <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="product.php">Quản lí sản phẩm</a></li>
                        <li><a href="typepro.php">Quản lí nhóm sản phẩm</a></li>
                        <li><a href="customer.php">Quản lí khách hàng</a></li>
                        <li><a href="orderdetails.php">Quản lí hoá đơn</a></li>
                        </ul>
                    </li>
                    
                    <li><a><i class="fa fa-bar-chart-o"></i> Báo cáo <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="chartjs.html">Báo cáo doanh thu</a></li>
                        <li><a href="chartjs2.html">Báo cáo khách hàng</a></li>
                        <li><a href="morisjs.html">Báo cáo sản phẩm</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-user"></i> Tài khoản <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="tables.html">Thông tin</a></li>
                        <li><a href="tables.html">Quản lí tài khoản</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                <div class="menu_section">
                    
                </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/img.jpg" alt="">Admin
                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="javascript:;"> Thông tin</a>
                            <a class="dropdown-item"  href="javascript:;">
                            <span>Cài đặt</span>
                            </a>
                        <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a>
                        </div>
                    </li>
    
                    <li role="presentation" class="nav-item dropdown open">
                        
                        <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                        <li class="nav-item">
                            <a class="dropdown-item">
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item">
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item">
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item">
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="text-center">
                            <a class="dropdown-item">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                            </div>
                        </li>
                        </ul>
                    </li>
                    </ul>
                </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <?php 
                include_once 'connect.php';
                $dt = 'SELECT SUM(total) FROM orderdetails';
                $result_set=mysqli_query($links, $dt);
                $row = mysqli_fetch_row($result_set);

                $hd = 'SELECT COUNT(orderID) FROM orderinf';
                $result_hd=mysqli_query($links, $hd);
                $hdrow = mysqli_fetch_row($result_hd);

                $kh = 'SELECT COUNT(cusID) FROM customer';
                $result_kh=mysqli_query($links, $kh);
                $khrow = mysqli_fetch_row($result_kh);
            ?>
            <div class="right_col" role="main">
          <div class="row" style="display: inline-block;">
            <div class=" top_tiles" style="margin: 10px 0;">
              <div class="col-md-3 col-sm-3  tile">
                <span>Tổng số doanh thu</span>
                <h2><?php echo  number_format($row[0]) ?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-3 col-sm-3  tile">
                <span>Tổng số hoá đơn</span>
                <h2><?php echo $hdrow[0] ?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-3 col-sm-3  tile">
                <span>Tổng số khách hàng</span>
                <h2><?php echo $khrow[0] ?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 125px;"></canvas>
                  </span> 
              </div>
              <div class="col-md-3 col-sm-3  tile">
                <span>Tổng số nhân viên</span>
                <h2>1</h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
            </div>
          
        
        </div>
        <?php 
            //index.php
            include_once 'connect.php';
            $query = "SELECT * FROM `orderinf` ORDER BY `orderID` DESC";
            $result = mysqli_query($links, $query);

            $date = "SELECT YEAR(orderDate) AS year, MONTH(orderDate) AS month, SUM(total) AS total, COUNT(orderID) AS ID FROM orderinf GROUP BY year,month";
            $result1 = mysqli_query($links, $date);

            $month = $daterow['month'];
            $year = $daterow['year'];

            $chart_data = '';
            while($row = mysqli_fetch_array($result1))
            {
            $chart_data .= "{ year:'".$row['year']."', month:".$row['month'].", tongtien:".$row['total'].",}
            $chart_data = substr($chart_data, 0, -2);
            var_dump($chart_data);
        ?>
        <script>
            Morris.Bar({
            element : 'chart',
            data:[<?php echo $chart_data; ?>],
            xkey:'year',
            ykeys:['month', 'tongtien','tonghoadon'],
            labels:['Month', 'Tổng tiền','Hoá đơn'],
            hideHover:'auto',
            stacked:true
            });
        </script>
        <div class="container" style="width:900px;">
            <h2 align="center">Biểu đồ Morris</h2>
            <h3 align="center">Tổng tiền và tổng hoá đơn theo từng tháng </h3>   
            <br /><br />
            <div id="chart"></div>
        </div>
            <br/>
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Admin Page by RedStore
            </div>
            <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
        </div>

        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- jQuery Sparklines -->
        <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- Flot -->
        <script src="../vendors/Flot/jquery.flot.js"></script>
        <script src="../vendors/Flot/jquery.flot.pie.js"></script>
        <script src="../vendors/Flot/jquery.flot.time.js"></script>
        <script src="../vendors/Flot/jquery.flot.stack.js"></script>
        <script src="../vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="../vendors/DateJS/build/date.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../vendors/moment/min/moment.min.js"></script>
        <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        
        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
</body>
</html>