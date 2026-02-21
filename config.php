<?php
$conn = mysqli_connect("localhost", "root", "", "user_crud");
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>