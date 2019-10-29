<?php
include('utility.php');
$servername = "####";
$username = "####";
$password = "####";
$dbname = "####";

// Create connection
$conn = mysqli_connect($servername , $username , $password , $dbname);
$db = mysqli_select_db($conn,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//debug_to_console("Connected successfully");
?>