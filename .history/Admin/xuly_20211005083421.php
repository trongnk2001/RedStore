
<?php

    
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['username'])){
        die('');
    }
     
    include('connect.php');

    header('Content-Type: text/html; charset=UTF-8');
          
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $email      = $_POST['email'];
          
    if (!$username || !$password || !$email )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        $password = md5($password);
          
    if (mysqli_num_rows(mysqli_query($links,"SELECT username FROM member WHERE username='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
          
    if (mysqli_num_rows(mysqli_query($links,"SELECT email FROM member WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
   
    $addmember = mysqli_query($links,"
        INSERT INTO member (username,email,password) VALUE ('$username','$email','$password')");
    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='login.php'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='login.php#signup'>Thử lại</a>";
?>  