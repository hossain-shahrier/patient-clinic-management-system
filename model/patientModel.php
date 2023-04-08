<?php
require_once('config/db_config.php');

function insertProblem($user)
{
    $conn = dbConnect();
    $finduser = false;

    // Check if the user already exists in the database

    // Insert the user data into the database
    $query = "INSERT INTO problems VALUES ('','$user[problem]','$user[description]','$user[email]')";
    if (mysqli_query($conn, $query)) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}
