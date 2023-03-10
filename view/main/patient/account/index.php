<?php
include '../inc/header.php';
require_once('../../../../model/userModel.php');
// Get user id from session
$email = $_SESSION['email'];
// Get user details from database
$user = getUserByEmail($email);

?>

<!-- Account Details -->
<div class="account-details">
    <!-- go back -->
    <a href="../dashboard.php">Go Back</a>
    <h1>Account Details</h1>
    <table>
        <tr>
            <td>Username</td>
            <td><?php echo $user[0]; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $user[2]; ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?php echo $user[3]; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $user[4]; ?></td>
        </tr>

        <tr>
            <td><a href="edit.php">Edit</a></td>
        </tr>
    </table>