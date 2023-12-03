<?php

include('../frontend/loginCheck.php');
//database connection code included
include('../frontend/database/db_connect.php');


session_start();

if (isset($_SESSION['user_details']) && isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    $details = $_SESSION['user_details'];
    if($details->account_type == '0' ){

//        echo 'ami hajir';

//        echo '<pre>';
//        echo print_r($_POST);
//        echo '</pre>';

        $account_type = $_POST['account_type'];
        $account_id = $_POST['id'];
//        echo $account_type.$account_id;
        $sql = "UPDATE `users` SET `account_type`='$account_type' WHERE `id`='$account_id'";

        $conn->query($sql);

        echo "<script>location.assign('../frontend/makeCommitteeMember.php')</script>";


    }
}
