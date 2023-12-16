<?php
include('../frontend/loginCheck.php');
include('../frontend/database/db_connect.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    if ($_SESSION['user_details']->account_type == 0 || $_SESSION['user_details']->account_type == 1) {

        $query = "SELECT * from success_story where id = '$id'";
        $result = $conn->query($query);

                    /*echo '<pre>';
            print_r($result);
            echo '</pre>';*/
        // to find invalid job id number
        if($result->num_rows > 0){

            $sqlDelete = "DELETE FROM success_story WHERE id = '$id'";
            $conn->query($sqlDelete);

            echo "<script>alert('Successfully Deleted')</script>";

        }

        else{
            echo "<script>alert('Invalid Job.')</script>";
        }

    }
    else{
        echo "<script>alert('You have no permission tio delete job post.')</script>";
    }
    echo "<script>location.assign('../frontend/successStory.php')</script>";
}
else{
    echo "<script>alert('Please provide valid Info')</script>";
    echo "<script>location.assign('../frontend/addSuccessStory.php')</script>";
}