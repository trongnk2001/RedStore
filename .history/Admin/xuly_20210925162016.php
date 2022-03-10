<?php
            include_once 'connect.php';
                if(isset($_POST['btn-add']))
                {
                    $idsanpham = $_POST['idsanpham'];
                    $idloaisanpham = $_POST['idloaisanpham'];
                    $ten = $_POST['ten'];
                    $anh= $_POST['anh'];
                    $anh1= $_POST['anh1'];
                    $anh2= $_POST['anh2'];
                    $anh3= $_POST['anh3'];
                    $anh4= $_POST['anh4'];
                    $mota= $_POST['mota'];
                    $donvi= $_POST['donvi'];
                    $dongia= $_POST['dongia'];
                    $soluong= $_POST['soluong'];
                    $trangthai= $_POST['trangthai'];

            
                //Code xử lý, insert dữ liệu vào table
                $sql = "INSERT INTO product (productID, typeproID, name, img, img1, img2, img3, img4, description,unit,price,quantity,status)
                VALUES ('$idsanpham', '$idloaisanpham', '$ten', '$anh', '$anh1', '$anh2', '$anh3', '$anh4','$mota', '$donvi', '$dongia', '$soluong', '$trangthai')";
            
                if(mysqli_query($links, $sql))
                    {
                        ?>
                        <script type="text/javascript">
                            alert('Data Are Inserted Successfully ');
                            window.location.href='product.php';
                        </script>
                        <?php
                    }
                else
                    {
                        ?>
                        <script type="text/javascript">
                            alert('error occured while inserting your data');
                        </script>
                        <?php
                    }
                }
        ?>