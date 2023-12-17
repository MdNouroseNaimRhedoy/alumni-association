<?php
include('../frontend/loginCheck.php');

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
//
//echo '<pre>';
//print_r($_FILES);
//echo '</pre>';

//database connection code included
include('../frontend/database/db_connect.php');

if (
    isset($_POST['title'])
    && isset($_POST['description'])
    && isset($_POST['start_date'])
    && isset($_POST['end_date'])
    && isset($_POST['goal_amount'])
){
    $title = $_POST['title'];
    $description= str_replace("'","\'",$_POST['description']);
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $goal_amount = $_POST['goal_amount'];

    $created_by = $_SESSION['user_details']->id;

    $timezone = new DateTimeZone("Asia/Dhaka" );
    $date = new DateTime();
    $date->setTimezone($timezone );

    $today_date = $date->format('Y/m/d');

    $sql = "INSERT INTO `fund` 
        (`title`, `description`, `start_date`, `end_date`, `goal_amount`, `created_by`) 
        VALUES ('$title', '$description', '$start_date', '$end_date', '$goal_amount', '$created_by')";


    if (is_uploaded_file($_FILES['cover_photo']['tmp_name'])){
        //image details
        $file_name = $_FILES['cover_photo']['name'];
        $file_type = $_FILES['cover_photo']['type'];
        $file_temp_name = $_FILES['cover_photo']['tmp_name'];

        if ($file_type == 'image/jpeg' || $file_type == 'image/png' || $file_type == 'image/jpg') {

            $unique_file_name = md5(time() . rand()) . $file_name;
            move_uploaded_file($file_temp_name, 'storage/' . $unique_file_name);

            $sql = "INSERT INTO `fund` 
            (`title`, `description`, `start_date`, `end_date`, `goal_amount`, `created_by`, `cover_photo`) 
            VALUES ('$title', '$description', '$start_date', '$end_date', '$goal_amount', '$created_by', '$unique_file_name')";

        } else {
            echo "<script>alert('Not Supported Image Format')</script>";
            echo "<script>location.assign('../frontend/allFundPosts.php')</script>";
        }
    }

    $conn->query($sql);

    echo "<script>alert('Successfully Posted')</script>";
    echo "<script>location.assign('../frontend/allFundPosts.php')</script>";
}
else{
    echo "<script>alert('Please provide valid Info')</script>";
    echo "<script>location.assign('../frontend/allFundPosts.php')</script>";
}