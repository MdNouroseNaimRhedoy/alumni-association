<?php
include('../frontend/loginCheck.php');


$company_name = $_GET['company_name'];
$company_website = $_GET['company_website'];
$review = $_GET['review'];

include('../frontend/database/db_connect.php');

$sql = "INSERT INTO `company_review`(`company_name`, `company_website`, `review`) VALUES ('$company_name','$company_website','$review')";

$conn->query($sql);

echo "<script>alert('Successfully Posted')</script>";
echo "<script>location.assign('../frontend/anonymousReview.php')</script>";
