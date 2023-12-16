<?php
include('../frontend/loginCheck.php');

$fund_id = $_POST['fund_id'];
$amount = $_POST['amount'];

if( isset($_POST['fund_id']) && $_POST['amount']){

}else{
    echo"<script>alert('Something went wrong!!')</script>";
}

$user_id = $_SESSION['user_details']->id;
$user_name = $_SESSION['user_details']->name;
$user_email = $_SESSION['user_details']->email;

/* PHP */
$post_data = array();
$post_data['store_id'] = "baper657de3b8c30f8";
$post_data['store_passwd'] = "baper657de3b8c30f8@ssl";
$post_data['total_amount'] =  "$amount";
$post_data['currency'] = "BDT";
$post_data['tran_id'] = "SSLCZ_TEST_".uniqid();
// need to change this url in sandbox account and here both links
$post_data['success_url'] = "http://alumni-association.test/backend/successPay.php";
$post_data['fail_url'] = "http://localhost/new_sslcz_gw/fail.php";
$post_data['cancel_url'] = "http://localhost/new_sslcz_gw/cancel.php";

# CUSTOMER INFORMATION
$post_data['cus_name'] = $user_name;
$post_data['cus_email'] = $user_email;

# OPTIONAL PARAMETERS
$post_data['value_a'] = "$fund_id";


# REQUEST SEND TO SSLCOMMERZ
$direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $direct_api_url );
curl_setopt($handle, CURLOPT_TIMEOUT, 30);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($handle, CURLOPT_POST, 1 );
curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


$content = curl_exec($handle );

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle))) {
    curl_close( $handle);
    $sslcommerzResponse = $content;
} else {
    curl_close( $handle);
    echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
    exit;
}

# PARSE THE JSON RESPONSE
$sslcz = json_decode($sslcommerzResponse, true );

if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="" ) {
    # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
    # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
    echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
    # header("Location: ". $sslcz['GatewayPageURL']);
    exit;
} else {
    echo "JSON Data parsing error!";
}



