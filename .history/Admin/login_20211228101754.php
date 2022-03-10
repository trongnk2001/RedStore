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
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login" >
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <?php
          session_start();
          header('Content-Type: text/html; charset=UTF-8');
          
          //Xử lý đăng nhập
          if (isset($_POST['dangnhap'])) 
          {
              //Kết nối tới database
              include_once('connect.php');
              
              //Lấy dữ liệu nhập vào
              $username = $_POST['username'];
              $password = $_POST['password'];

              //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
              if (!$username || !$password) {
                  echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
                  exit;
              }
              
              
              //Kiểm tra tên đăng nhập có tồn tại không
              $query = mysqli_query($links,"SELECT username, password FROM member WHERE username='$username'");
              if (mysqli_num_rows($query) == 0) {
                  echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                  exit;
              }
              $password1 = md5($password);
              //Lấy mật khẩu trong database ra
              $row = mysqli_fetch_array($query);
              
              //So sánh 2 mật khẩu có trùng khớp hay không
              if ($password1 != $row['password']) {
                  echo '<h3 style="color:#000 ">'."Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>".'</h3>';
                  exit;
              }
              
              //Lưu tên đăng nhập
              $_SESSION['username'] = $username;
              echo '<h3 id="alrt" style="color:#000">'."Xin chào " . $username . ". Bạn đã đăng nhập thành công, bạn sẽ được chuyển đến trong 3s" .'</h3>';
              header( "refresh:3;url=admin.php?username=$username" );
              die();
          }
?>
      <script>
        document.getElementById('alrt').innerHTML='<b>Please wait, Your download will start soon!!!</b>'; 
        setTimeout(function() {document.getElementById('alrt').innerHTML='';},5000);
      </script>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="login.php?do=login" method="post">
              <h1 style="color:#000">Đăng nhập</h1>
              <div>
                <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Tài khoản" required="" />
              </div>
              <div>
                <input type="password" name="password"  class="form-control" autocomplete="off" placeholder="Mật khẩu" required="" />
              </div>
              <div>
                <input type="submit" name="dangnhap" value="Đăng nhập" style="float: unset;margin:0px 0px;">
                <input type="submit" value="Quên mật khẩu" style="float: unset;margin-left: 10px;"> 
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Chưa có tài khoản?
                  <a href="#signup" class="to_register"> Tạo tài khoản </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Red Store!</h1>
                  <p style="color:#000">©2016 Copyright by RedStore</p>
                </div>
              </div>
            </form>
          </section>
        </div>

       
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="xuly.php" method="POST" autocomplete="off">
              <h1>Tạo tài khoản</h1>
              <div>
                <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Tên đăng nhập" required="" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Mật khẩu" required="" />
              </div>
              <div>
                <input type="submit" value="Đăng kí" style="float: unset;margin: 0px 0px;">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Bạn đã là thành viên ?
                  <a href="#signin" class="to_register"> Đăng nhập </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Red Store!</h1>
                  <p>©2016 Copyright by Red Store</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
