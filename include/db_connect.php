<?php
/* Database connection start */
$servername = "localhost";
$username = "artexpertswebsit_payment_admin";
$password = "123adminpay";
$dbname = "artexpertswebsit_payments";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>