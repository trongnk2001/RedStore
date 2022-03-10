<?php 
    $output = "";
    $output .="
        <table>
        <tr>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
            <th>Tạm tính</th>
        </tr>
    ";
                    if( !empty($_SESSION['cart']) ) 
                    {
                       foreach ($_SESSION['cart'] as $key => $value)
                       {
                        $rerult = substr($value['img'],3);
                        $output .="
                            <tr>
                            </tr>;
                            
                        ";
                        }
                    }
                 
  
?>    