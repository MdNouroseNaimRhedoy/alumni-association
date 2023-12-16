<?php

$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("baper657de3b8c30f8");
$store_passwd=urlencode("baper657de3b8c30f8@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

    # TO CONVERT AS ARRAY
    # $result = json_decode($result, true);
    # $status = $result['status'];

    # TO CONVERT AS OBJECT
    $result = json_decode($result);

    # TRANSACTION INFO
    $status = $result->status;
    $tran_date = $result->tran_date;
    $tran_id = $result->tran_id;
    $val_id = $result->val_id;
    $amount = $result->amount;
    $store_amount = $result->store_amount;
    $bank_tran_id = $result->bank_tran_id;
    $card_type = $result->card_type;

//    print some value for ensure working or not
/*    echo "<h1 >Transaction successful<br>Data for saving to database<br>Status:$status<br>Transaction Date:$tran_date<br>Transaction Id:$tran_id<br>Amount Paid: $amount</h1>";
    echo '<pre>';
    print_r($result);
    echo '</pre>';*/
    $fund_id = $result->value_a;

    if($status == 'VALID'){
        include ('../frontend/database/db_connect.php');

        $sql = "select * from fund where id='$fund_id'";
        $fund = $conn->query($sql);
        $fund = $fund->fetch_assoc();

        $currentAmount = $fund['current_amount'];

        $totalPaid = $currentAmount + $amount;

        $sql = "update fund set current_amount='$totalPaid' where id = '$fund_id'";
        $conn->query($sql);

        echo "<script>alert('Payment Successful')</script>";
        $redirectUrl  = '../frontend/singleFundPost.php?id='.$fund_id;
        echo"  <script>location.assign('$redirectUrl')</script>";

    }





} else {

    echo "Failed to connect with SSLCOMMERZ";
}
