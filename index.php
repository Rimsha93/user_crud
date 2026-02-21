<?php
include "config.php";
$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <h2>User Management System</h2>
        <a href="add.php" class="add-btn">Add New User</a>
    </div>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>City</th>
        <th>Actions</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['phone']; ?></td>
        <td><?= $row['city']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>" class="edit">Edit</a>
            <a href="delete.php?id=<?= $row['id']; ?>" class="delete" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</div>
</table>
</body>
</html>