
<?php
include_once 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script type="text/javascript">
        function edt_id(id)
        {
                window.location.href='edit-product.php?edit_id='+id;
        }
        function delete_id(id)
        {
            if(confirm('Bạn có chắc chắn xoá sản phẩm này ?'))
            {
                window.location.href='product.php?delete_id='+id;
            }
        }
</script>
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
                    <h2><?php echo $username ?></h2>
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
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
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
                        <img src="images/img.jpg" alt=""><?php echo $username ?>
                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="javascript:;"> Thông tin</a>
                            <a class="dropdown-item"  href="javascript:;">
                            <span>Cài đặt</span>
                            </a>
                        <a class="dropdown-item"  href="login.php"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a>
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

        <!-- page content -->
        <div class="right_col" role="main">
   


            

   <div class="clearfix"></div>

   <div class="col-md-12 col-sm-12  ">
     <div class="x_panel">
       <div class="x_title">
         <h2>Quản lí hoá đơn</h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <a class="dropdown-item" href="#">Settings 1</a>
                 <a class="dropdown-item" href="#">Settings 2</a>
               </div>
           </li>
           <li><a class="close-link"><i class="fa fa-close"></i></a>
           </li>
         </ul>
         <div class="clearfix"></div>
       </div>

       <div class="x_content">

         <div class="table-responsive">
           <table class="table table-striped jambo_table bulk_action">
             <thead>
               <tr class="headings">
                 <th>
                   <input type="checkbox" id="check-all" class="flat">
                 </th>
                 <th class="column-title">Mã hoá đơn</th>
                 <th class="column-title">Ngày hoá đơn</th>
                 <th class="column-title">Mã khách hàng</th>
                 <th class="column-title">Mã sản phẩm</th>
                 <th class="column-title">Tên khách hàng</th>
                 <th class="column-title">Tên sản phẩm </th>
                 <th class="column-title">Số lượng </th>
                 <th class="column-title">Tổng tiền </th>
                 </th>
                 <th class="bulk-actions" colspan="7">
                   <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                 </th>
               </tr>
             </thead>
            

             <tbody>
               <tr class="even pointer">
                 
                 <?php
                        include_once 'connect.php';
  
                      $sql_query="SELECT * FROM orderinf,orderdetails,customer,product WHERE customer.cusID=orderinf.customerID and orderinf.orderID = orderdetails.orderID and orderdetails.productID=product.productID ORDER BY orderinf.orderDate";
                      $result_set=mysqli_query($links, $sql_query);
                      if(mysqli_num_rows($result_set)>0)
                      {
                          while($row=mysqli_fetch_row($result_set))
                          {
                              ?>
                                  <tr>
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" "><?php echo $row[0]; ?></td>
                                        <td class=" "><?php echo $row[3]; ?></td>
                                        <td class=" "><?php echo $row[1]; ?></td>
                                        <td class=" "><?php echo $row[7]; ?></td>
                                        <td class=" "><?php echo $row[12]; ?></td>
                                        <td class=" "><?php echo $row[17]; ?></td>
                                        <td class="a-right a-right "><?php echo $row[9]; ?></td>
                                        <td class=" last"><?php echo $row[10]; ?></td>
                                  </tr>
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
                
               </tr>
              
             </tbody>
           </table>
         </div>
                 
             
       </div>
     </div>
   </div>
 </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Admin Template by Red Store <a href="https://colorlib.com"></a>
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>