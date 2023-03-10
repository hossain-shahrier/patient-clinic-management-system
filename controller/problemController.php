<?php
session_start();
require_once("../model/patientModel.php");

// Problem Controller
if (isset($_POST['submit'])) {
    $problem = $_POST['problem'];
    $description = $_POST['description'];
    $email = $_SESSION['email'];
    // FILE
    $file = $_FILES['upload']['name'];
    if (empty($problem) || empty($description) || empty($email)) {
        echo "Please fill up all the fields";
        return;
    }
    $user = [
        'problem' => $problem,
        'description' => $description,
        'email' => $email,
    ];
    $status = insertProblem($user);
    if ($status) {
        $allowed_ext = array('png', 'jpg', 'jpeg', 'git');
        if (!empty($_FILES['upload']['name'])) {
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_type = $_FILES['upload']['type'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $target_dir = "../view/main/patient/upload/problems/" . $file_name;

            // Get file extension
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            // validate the extension
            if (in_array($file_ext, $allowed_ext)) {
                if ($file_size <= 1000000) {
                    move_uploaded_file($file_tmp, $target_dir);
                    // Add problem to Cookie
                    setcookie('problem', $problem, time() + 3600, '/');
                    header('location: ../view/main/patient/dashboard.php');
                } else {
                    echo '<p style="color:red;">File too large</p>';
                }
            } else {
                echo '<p style="color:red;">Invalid file type</p>';
            }
        } else {
            echo '<p style="color:red;">Please choose a file</p>';
        }
    } else {
        echo "error..try again";
    }
}
