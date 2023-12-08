<?php
include('../frontend/loginCheck.php');

/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/

//database connection code included
include('../frontend/database/db_connect.php');

if (isset($_POST['title']) && isset($_POST['content']) &&    isset($_POST['id'])){
    $id = $_POST['id'];

    $sqlDelete = "DELETE FROM success_story WHERE id = '$id'";

       /* echo '<pre>';
        print_r($sqlDelete);
        echo '</pre>';*/

        $conn->query($sqlDelete);

    if (is_uploaded_file($_FILES['cover_photo']['tmp_name'])){
        $title= $_POST['title'];
        $content= str_replace("'","\'",$_POST['content']);
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
            $sql = "INSERT INTO success_story (title, content, user_id_fk, cover_photo)
            VALUES ('$title', '$content', '$user_id', '$unique_file_name')";

            $conn->query($sql);

            echo "<script>alert('Successfully Posted')</script>";
            echo "<script>location.assign('../frontend/successStory.php')</script>";

        } else {
            echo "<script>alert('Not Supported Image Format')</script>";
            echo "<script>location.assign('../frontend/addSuccessStory.php')</script>";
        }
    }
}
else{
    echo "<script>alert('Please provide valid Title, Content')</script>";
    echo "<script>location.assign('../frontend/successStory.php')</script>";

}