<?php
include('../frontend/loginCheck.php');

//database connection code included
include('../frontend/database/db_connect.php');

if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['id'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = str_replace("'", "\'", $_POST['content']);

    $sql = "UPDATE success_story 
                    SET title = '$title', 
                    content = '$content'
                    WHERE id = '$id'";

    if (is_uploaded_file($_FILES['cover_photo']['tmp_name'])) {

        //image details
        $file_name = $_FILES['cover_photo']['name'];
        $file_type = $_FILES['cover_photo']['type'];
        $file_temp_name = $_FILES['cover_photo']['tmp_name'];

        if ($file_type == 'image/jpeg' || $file_type == 'image/png' || $file_type == 'image/jpg') {

            $unique_file_name = md5(time() . rand()) . $file_name;
            move_uploaded_file($file_temp_name, 'storage/' . $unique_file_name);

            session_start();
            $user_id = $_SESSION['user_details']->id;

            //change sql with photo
            $sql = "UPDATE success_story 
                    SET title = '$title', 
                    content = '$content', 
                    cover_photo = '$unique_file_name' 
                    WHERE id = '$id'";


        } else {
            echo "<script>alert('Not Supported Image Format')</script>";
            echo "<script>location.assign('../frontend/addSuccessStory.php')</script>";
        }
    }

    $conn->query($sql);
    echo "<script>alert('Successfully Saved')</script>";
    $redirectUrl = '../frontend/successStory.php';
    echo "<script>location.assign('$redirectUrl')</script>";
} else {
    echo "<script>alert('Please provide valid Title, Content')</script>";
    echo "<script>location.assign('../frontend/successStory.php')</script>";

}