 <?php
    session_start();
    require_once("../model/userModel.php");

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        // Check if Inputs are Null or Not
        if (empty($username) || empty($email) || empty($password) || empty($repassword) || empty($phone)) {
            echo "null value found...";
        }
        // If inputs are not Null
        else {
            if (strlen($username) > 3) {
                if (strlen($password) > 4) {
                    // Check if password and re-password are same
                    if ($password == $repassword) {
                        $user = [
                            'username' => $username,
                            'password' => $password,
                            'email' => $email,
                            'phone' => $phone,
                            'address' => $address,
                            'type' => 'patient',
                        ];
                        // Calling Text Insert User Operation Function
                        $status = insertUser($user);
                        // Insert Function will send Database Operation Status,If Status True..Redirect to Login Page
                        if ($status) {
                            header('location: ../view/login.php');
                        }
                        // If Operation Failed. 
                        else {
                            echo "error..try again";
                        }
                    } else {
                        echo "password & confirm password mismatch...";
                    }
                } else {
                    echo "Password must be more than 4 letters";
                }
            } else {
                echo "Username must be More than 3 letters";
            }
        }
    }
