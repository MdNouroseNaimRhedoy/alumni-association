<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_association";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo '<script>';
    echo " alert('Database not successfully connected') ";
    echo '</script>';
}