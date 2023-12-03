<?php
//database connection code included
include('database/db_connect.php');

// check data exits in post var or not
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // sql generation
    $mysql = "select * from users where email='$email' ";

    // process select = query
    $return = $conn->query($mysql);
    $obj = $return->fetch_object();
    // if i found 1 person

    if ($return->num_rows == 1 && password_verify(md5($password), $obj->password)) {
        session_start();
        $_SESSION['logged_in'] = true;
//        echo '<pre>';
//        print_r($return);
//        echo '/<pre>';


        $_SESSION['user_details'] = $obj;

        echo"  <script>alert('Login Successful')</script>";
        echo"  <script>location.assign('index.php')</script>";

    }
    else
    {
        session_start();
        $_SESSION['logged_in']=false;
        echo"<script>alert('Wrong email or Password')</script>";
        echo"  <script>location.assign('register.php')</script>";
    }

}
else {
    echo "<script>location.assign('register.php')</script>";
}