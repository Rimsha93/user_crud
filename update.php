<?php
include "config.php";
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    
    mysqli_query($conn, "UPDATE users SET 
        name='$name',
        email='$email',
        phone='$phone',
        city='$city'
        WHERE id=$id");

    header("Location: index.php");
}
?>