<?php
include('../frontend/loginCheck.php');


/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/
//
//echo '<pre>';
//print_r($_FILES);
//echo '</pre>';

//database connection code included
include('../frontend/database/db_connect.php');

if (isset($_GET['job_id'])){
    $job_id = $_GET['job_id'];
    if ($_SESSION['user_details']->account_type == 0 || $_SESSION['user_details']->account_type == 1) {

        $query = "SELECT * from jobs where job_id = '$job_id'";
        $result = $conn->query($query);

                    /*echo '<pre>';
            print_r($result);
            echo '</pre>';*/
        // to find invalid job id number
        if($result->num_rows > 0){

            $sqlDelete = "DELETE FROM jobs WHERE job_id = '$job_id'";
            $conn->query($sqlDelete);

            echo "<script>alert('Successfully Deleted')</script>";
            echo "<script>location.assign('../frontend/allJobPost.php')</script>";

        }

        else{
            echo "<script>alert('Invalid Job.')</script>";
            echo "<script>location.assign('../frontend/allJobPost.php')</script>";
        }

    }
    else{
        echo "<script>alert('You have no permission tio delete job post.')</script>";
        echo "<script>location.assign('../frontend/allJobPost.php')</script>";
    }

}
else{
    echo "<script>alert('Please provide valid Info')</script>";
    echo "<script>location.assign('../frontend/addJobPost.php')</script>";
}