<?php
include "config.php";
if(isset($_POST['submit'])){
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city  = $_POST['city'];
    mysqli_query($conn, "INSERT INTO users (name,email,phone,city) 
        VALUES ('$name','$email','$phone','$city')");
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Add User</h2>
        <a href="index.php" class="back-btn">← Back to Dashboard</a>
    </div>
    <form method="POST">
        <div>
            <label>Name</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Phone</label>
            <input type="text" name="phone" required>
        </div>
        <div>
            <label>City</label>
            <input type="text" name="city" required>
        </div>
        <input type="submit" name="submit" value="Add User">
    </form>
</div>
</body>
</html>