<!-- Edit Account details -->
<?php
// Include header
include '../inc/header.php';
require_once('../../../../model/userModel.php');
$email = $_SESSION['email'];
$user = getUserByEmail($email);
?>

<!-- Edit Account Details -->
<div class="account-details">
    <!-- go back -->
    <a href="./">Go Back</a>
    <h1>Edit Account Details</h1>
    <form action="../../../../controller/editUser.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $user[0]; ?>"></td>
            </tr>
            <tr hidden>
                <td>Password</td>
                <td><input type="password" hidden name="password" value="<?php echo $user[1]; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $user[2]; ?>"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" value="<?php echo $user[3]; ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $user[4]; ?>"></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
<!-- Include footer -->
<?php
include '../inc/footer.php';
?>