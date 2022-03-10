<?php
include_once 'connect.php';

if(isset($_POST['btn-add']))
{
    $idsanpham = $_POST['idsanpham'];
	$idloaisanpham = $_POST['idloaisanpham'];
	$ten = $_POST['name'];
    $anh = $_FILES['file'];
	$mota = $_POST['description'];
	$donvi = $_POST['unit'];
	$dongia = $_POST['price'];
	$soluong = $_POST['quantity'];
	$trangthai = $_POST['status'];
     $name = array();
     $error = array();
     $ext = array();
     $upload_file = array();
     foreach($_FILES['file']['name'] as $file){
         $name[] = $file;
     };
     foreach($_FILES['file']['error'] as $file){
         $error[] = $file;
     };
     foreach($_FILES['file']['ext'] as $file){
         $ext[] = $file;
     };
     for($i = 0; $i < count($name); $i++){
         if ($error[$i] > 0){
             echo 'Lỗi : ' . $error[$i];
         }
         else{
             $upload_dir = '../images/';
             $upload_file[] = $upload_dir . $name[$i];
            
              
         }
     };
     $sql_query = "INSERT INTO product (productID, typeproID, name, img,img1,img2,img3,img4, description,unit,price,quantity,status)
     VALUES ('$idsanpham', '$idloaisanpham', '$ten', '$upload_file[0]','$upload_file[1]','$upload_file[2]','$upload_file[3]','$upload_file[4]','$mota', '$donvi', '$dongia', '$soluong', '$trangthai')";
	
    
    




	// variables for input data
	
	// sql query for update data into database

	
	// sql query for update data into database
	
	// sql query execution function
	if(mysqli_query($links, $sql_query))
                    {
                        ?>
                        <script type="text/javascript">
                             alert('Data Are Inserted Successfully ');
                             window.location.href='product.php';
                        </script>
                        <?php 
                            // foreach($anh as $key => $value){
                            //     foreach($value as $index => $value){
                            //         $files[$index][$key] = $value;
                            //     }
                            // }
                            // var_dump($files);exit;
                         ?>
                        <?php
                    }
                else
                    {
                        ?>
                        <script type="text/javascript">
                            alert('Lỗi Update du liệu');
                        </script>
                        <?php
                    }
	// sql query execution function
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
                        <li><a href="orderinf.php">Báo cáo doanh thu</a></li>
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

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Thêm mới sản phẩm</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Sản phẩm </h2>
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
                                    <form class="" action="" method="POST" enctype="multipart/form-data">
                                        <span class="section">Chi tiết</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">ID Sản phẩm<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="idsanpham" placeholder="" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">ID Loại Sản phẩm<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="idloaisanpham" data-validate-length-range="5,15" type="text" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tên<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="name" data-validate-length-range="5,15" type="text"/></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Ảnh<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="border-img" style="text-align: center; border: 1px solid #ccc;">
                                                    <input multiple type="file" name="file[]" data-target="#pictureBtn" data-edit="insertImage">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Mô tả<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea rows="9" cols="9" style="width:100%" required="required" name='description' value=""></textarea></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Đơn vị</label><span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="unit" data-validate-length-range="5,15" type="text"  /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Đơn giá</label><span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="price" data-validate-length-range="5,15" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Số lượng</label><span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="quantity" data-validate-length-range="5,15" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Trạng thái</label><span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="status" data-validate-length-range="5,15" type="text" /></div>
                                        </div>

                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3" style="text-align: center;">
                                                    <button name="btn-add" type='submit' class="btn btn-primary">ADD</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../vendors/validator/multifield.js"></script>
    <script src="../vendors/validator/validator.js"></script>
    
    <!-- Javascript functions	-->
	

    
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <!-- <script src="../vendors/validator/validator.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</body>

</html>
