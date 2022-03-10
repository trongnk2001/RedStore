<?php 
    $output = '';
    $output .='
        <table>
        <tr>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
            <th>Tạm tính</th>
        </tr>
    ';
                    if( !empty($_SESSION['cart']) ) 
                    {
                       foreach ($_SESSION['cart'] as $key => $value)
                       {
                        $rerult = substr($value['img'],3);
                        $output .='
                         echo '
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
                                <td><input type="number" value="1"></td>
                                <td>375.000đ</td>
                            <tr>
                            
                        ';
                        }
                    }
                 
  
?>    