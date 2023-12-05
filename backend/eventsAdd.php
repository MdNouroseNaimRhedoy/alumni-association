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
if (isset($_POST['event_name']) && isset($_POST['event_date']) && isset($_POST['location'])
    && isset($_POST['e_description'])) {

    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];

    $location = $_POST['location'];
    $e_description = $_POST['e_description'];

    if (is_uploaded_file($_FILES['cover_photo1']['tmp_name'])) {

        //image1 details
        $file_name1 = $_FILES['cover_photo1']['name'];
        $file_type1 = $_FILES['cover_photo1']['type'];
        $file_temp_name1 = $_FILES['cover_photo1']['tmp_name'];


        if ($file_type1 == 'image/jpeg' || $file_type1 == 'image/png' || $file_type1 == 'image/jpg') {

            $unique_file_name1 = md5(time() . rand()) . $file_name1;
            move_uploaded_file($file_temp_name1, 'storage/' . $unique_file_name1);

            session_start();
            $user_id = $_SESSION['user_details']->id;
            $alumni_id_fk = $_SESSION['user_details']->alumni_id_fk;


            //change sql with photo
            $sql = "INSERT INTO `events`( `event_name`, `date`, `alumni_id_fk`, `photos_1`, `event_description`, `location`)
                                VALUES ('$event_name','$event_date','$alumni_id_fk','$unique_file_name1','$e_description','$location')";

//            $conn->query($sql);


        } else {
            echo "<script>alert('Not Supported Image Format')</script>";
            echo "<script>location.assign('../frontend/eventsAdd.php')</script>";
        }
    }

    //            2nd image work starts
    if (is_uploaded_file($_FILES['cover_photo2']['tmp_name'])) {

        //image1 details
        $file_name2 = $_FILES['cover_photo2']['name'];
        $file_type2 = $_FILES['cover_photo2']['type'];
        $file_temp_name2 = $_FILES['cover_photo2']['tmp_name'];


        if ($file_type2 == 'image/jpeg' || $file_type2 == 'image/png' || $file_type2 == 'image/jpg') {

            $unique_file_name2 = md5(time() . rand()) . $file_name2;
            move_uploaded_file($file_temp_name2, 'storage/' . $unique_file_name2);


            //change sql with photo
            $sql = "INSERT INTO `events`( `event_name`, `date`, `alumni_id_fk`, `photos_1`, `event_description`, `location`,`photos_2`)
                                VALUES ('$event_name','$event_date','$alumni_id_fk','$unique_file_name1','$e_description','$location','$unique_file_name2')";
        } else {
            echo "<script>alert('Not Supported Image Format')</script>";
            echo "<script>location.assign('../frontend/eventsAdd.php')</script>";
        }
    }
    //            2nd image work ends

    //           3rd image work starts
    if (is_uploaded_file($_FILES['cover_photo3']['tmp_name'])) {

        //image1 details
        $file_name3 = $_FILES['cover_photo3']['name'];
        $file_type3 = $_FILES['cover_photo3']['type'];
        $file_temp_name3 = $_FILES['cover_photo3']['tmp_name'];


        if ($file_type3 == 'image/jpeg' || $file_type3 == 'image/png' || $file_type3 == 'image/jpg') {

            $unique_file_name3 = md5(time() . rand()) . $file_name3;
            move_uploaded_file($file_temp_name3, 'storage/' . $unique_file_name3);

            //change sql with photo
            $sql = "INSERT INTO `events`( `event_name`, `date`, `alumni_id_fk`, `photos_1`, `event_description`, `location`,`photos_2`,`photos_3`)
                                VALUES ('$event_name','$event_date','$alumni_id_fk','$unique_file_name1','$e_description','$location','$unique_file_name2','$unique_file_name3')";
        } else {
            echo "<script>alert('Not Supported Image Format')</script>";
            echo "<script>location.assign('../frontend/eventsAdd.php')</script>";
        }
    }
    //            3rd image work ends
//echo $sql;

    $conn->query($sql);
//    echo '<pre>';
//    print_r($result);
//    echo '</pre>';

    echo "<script>alert('Successfully Posted')</script>";
    echo "<script>location.assign('../frontend/allEvent.php')</script>";

}
