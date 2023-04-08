<?php
include '../inc/sidebar.php';
require_once('../../../../model/userModel.php');
$email = $_SESSION['email'];
$user = getUserByEmail($email);
?>

<!-- Edit Account Details -->
<div class="account-details">
    <!-- go back -->
    <a href="./" class="edit-link" style="text-decoration: none;">Go Back</a>
    <h1>Edit Account Details</h1>
    <form action="../../../../controller/editUser.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $user['username']; ?>"></td>
            </tr>
            <tr hidden>
                <td>Password</td>
                <td><input type="password" hidden name="password" value="<?php echo $user['password']; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $user['email']; ?>"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" value="<?php echo $user['phone']; ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $user['adress']; ?>"></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Update" class="btn"></td>
            </tr>
        </table>
    </form>
</div>
<!-- Include footer -->
<?php
include '../inc/footer.php';
?>