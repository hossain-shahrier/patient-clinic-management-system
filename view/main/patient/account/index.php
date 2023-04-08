<?php
include '../inc/sidebar.php';
require_once('../../../../model/userModel.php');
// Get user id from session
$email = $_SESSION['email'];
// Get user details from database
$user = getUserByEmail($email);
?>

<section class="account-container">
    <div>
        <a href="../dashboard.php" class="btn" style="text-decoration: none;">Go Back</a>
        <h1 class="info-heading">Account Details</h1>
        <table class="info-table">
            <tr>
                <td>Username</td>
                <td><?php echo $user['username']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $user['email']; ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo $user['phone']; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $user['adress']; ?></td>
            </tr>

            <tr>
                <td><a href="edit.php" class="edit-link">Edit</a></td>
            </tr>
        </table>
    </div>
</section>