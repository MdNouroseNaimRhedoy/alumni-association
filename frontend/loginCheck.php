<?php
session_start();
if(isset($_SESSION['user_details']) && isset($_SESSION['logged_in']) && $_SESSION['logged_in']== true){

}
else{
    // php location.assign function
    header('location:register.php');
}
session_abort();