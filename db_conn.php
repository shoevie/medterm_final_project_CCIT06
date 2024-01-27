<?php
$hostname = 'localhost';
$username = 'id21762510_studentofstudent';
$password = 'MyStudent_12'; 
$database = 'id21762510_inliststudent';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
