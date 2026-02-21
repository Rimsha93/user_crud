<?php
include "config.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Edit User</h2>
        <a href="index.php" class="back-btn">← Back to Dashboard</a>
    </div>
    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?= $row['name']; ?>" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="<?= $row['email']; ?>" required>
        </div>
        <div>
            <label>Phone</label>
            <input type="text" name="phone" value="<?= $row['phone']; ?>" required>
        </div>
        <div>
            <label>City</label>
            <input type="text" name="city" value="<?= $row['city']; ?>" required>
        </div>
        <input type="submit" name="update" value="Update User">
    </form>
</div>
</body>
</html>