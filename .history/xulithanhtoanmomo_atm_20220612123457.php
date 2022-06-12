
<?php
header('Content-type: text/html; charset=utf-8');
session_start();
include_once './Admin/connect.php';
$total = $_POST['total'];
$total_number = str_replace( ',', '', $total );
if(isset($_GET['action'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $village = $_POST['village'];
    $tel = $_POST['tel'];
    $array_infor = array($name,$address,$city, $district, $village, $tel);
}
var_dump($_SESSION['form_data']);
var_dump($_SESSION['cart']);
function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}


$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';


$orderInfo = "Thanh toán qua MoMo";
$amount = $total_number;
$orderId = time() ."";
$redirectUrl = "http://localhost/RedStore/cart.php?action=submit";
$ipnUrl = "http://localhost/RedStore/cart.php?action=submit";
$extraData = "";




    $requestId = time() . "";
    $requestType = "payWithATM";
    //before sign HMAC SHA256 signature
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $secretKey);
    $data = array('partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature,
    );
    $insertCus = mysqli_query($links, "INSERT INTO customer(cusID,name,adress,tel) VALUE ('','$name','$address.$village.$district.$city','$tel')");

    $array_cart = array($_SESSION['cart']);
    $array_cart += $array_infor;
    if ($error == false && !empty($_POST['soluong'])) {
        $total = 0;
        for($i = 1; $i <= count($array_cart[0]); $i++){
            $total = $array_cart[0][$i-1]['price']*$array_cart[0][$i-1]['soluong'];
            $tongtien += $total;
        }
        $cusID = mysqli_query($links, "SELECT * FROM customer ORDER BY cusID DESC LIMIT 1");
            $add = mysqli_fetch_all($cusID);
            $idcus = $add[0][0];
            $last_id = mysqli_insert_id($links);
            $mysqltime = date ("Y-m-d H:i:s", $phptime);
            $insertOrder = mysqli_query($links, "INSERT INTO orderinf (orderID, customerID, total, orderDate, status) VALUES ('$orderID', '$idcus', '$tongtien', '$mysqltime', 'MOMO')");
                
            for($i = 1; $i <= count($array_cart[0]); $i++){
                
            $products = mysqli_query($links, "SELECT * FROM product WHERE productID = $i");
            $total = 0;
            $orderProducts = array();
            $row = mysqli_fetch_array($products);
            $orderProducts[] = $row;
            $total += $array_cart[0][$i-1]['price']*$array_cart[0][$i-1]['soluong'];
            
            // $insertCus = mysqli_query($links, "INSERT INTO customer(cusID,name,adress,tel) VALUE ('','$name','$address.$village.$district.$city','$tel')");
            $ordID = mysqli_query($links, "SELECT * FROM orderinf ORDER BY orderID DESC LIMIT 1");
            $for_ordID = mysqli_fetch_all($ordID);
            $idord = $for_ordID[0][0];

            $product_ID = $array_cart[0][$i-1]['id'];
            $last_order = mysqli_insert_id($links);
            $insertString = "";
            $gia = $array_cart[0][$i-1]['price'];
            $soluong = $array_cart[0][$i-1]['soluong'];
            $insertOrderDetails = mysqli_query($links, "INSERT INTO `orderdetails` (`id`, `orderID`, `productID`, `price`, `quantity`, `total`) VALUES ('', '$idord','$product_ID', '$gia','$soluong', '$total')");
    }}
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json
    // header('Location: ' . $jsonResult['payUrl']);
    //Just a example, please check more in there
?>
