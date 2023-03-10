<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>

    <div class="signup-content">
        <div class="error"></div>
        <form id="form" name="login" action="../controller/registrationCheck.php" method="POST">
            <h1>Sign Up</h1>
            <table>
                <tr>
                    <td>
                        <label for="username">Username</label><br />
                        <input type="text" name="username" />
                    </td>
                </tr>
                <td>
                    <label for="email">Email</label><br />
                    <input type="email" name="email" />
                </td>
                <tr>
                <tr>
                    <td>
                        <label for="password">Password</label><br />
                        <input type="password" name="password" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="repassword">Re-password</label><br />
                        <input type="password" name="repassword" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">Phone</label><br />
                        <input type="text" name="phone" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address</label><br />
                        <input type="text" name="address" />
                    </td>

                </tr>
                <tr>
                    <td>
                        <input class="submit" name="submit" type="submit" value="submit" />
                    </td>
                </tr>
                <tr>
                    <td>Have an account? <a href="./login.php"><strong>Login</strong></a></td>
                </tr>
            </table>
        </form>

</body>

</html>