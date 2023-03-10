<?php
session_start();
require_once("../model/patientModel.php");

if (isset($_POST['submit'])) {
    $allowed_ext = array('png', 'jpg', 'jpeg', 'git');
    if (!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_type = $_FILES['upload']['type'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "../view/main/patient/upload/uploads/" . $file_name;

        // Get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        // validate the extension
        if (in_array($file_ext, $allowed_ext)) {
            if ($file_size <= 1000000) {
                move_uploaded_file($file_tmp, $target_dir);
                echo '<p style="color:green;">File uploaded</p>';
            } else {
                echo '<p style="color:red;">File too large</p>';
            }
        } else {
            echo '<p style="color:red;">Invalid file type</p>';
        }
    } else {
        echo '<p style="color:red;">Please choose a file</p>';
    }
}
