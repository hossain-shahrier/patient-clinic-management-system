<?php
require_once('config/db_config.php');
function insertUser($user)
{
    $conn = dbConnect();
    $finduser = false;

    // Check if the user already exists in the database
    $query = "SELECT * FROM users WHERE email='" . $user['email'] . "'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $finduser = true;
    }

    if ($finduser) {
        return false;
    } else {
        // Insert the user data into the database
        $query = "INSERT INTO users VALUES ('','$user[username]','$user[password]','$user[email]','$user[phone]','$user[address]','$user[type]','')";
        if (mysqli_query($conn, $query)) {
            mysqli_close($conn);
            return true;
        } else {
            mysqli_close($conn);
            return false;
        }
    }
}
function validateUser($email, $password)
{
    // Create database connection
    $conn = dbConnect();

    // Prepare statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);

    // Execute statement
    mysqli_stmt_execute($stmt);

    // Get result
    $result = mysqli_stmt_get_result($stmt);

    // Check if query returns a row
    if (mysqli_num_rows($result) == 1) {
        return true;
    } else {
        return false;
    }

    // Close the database connection
    mysqli_close($conn);
}

// Get user name
function userName($email)
{
    $conn = dbConnect();

    // Prepare statement
    $stmt = mysqli_prepare($conn, "SELECT username FROM users WHERE email=?");
    mysqli_stmt_bind_param($stmt, "s", $email);

    // Execute statement
    mysqli_stmt_execute($stmt);

    // Get result
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user['username'];
    } else {
        return false;
    }
}

function userType($email)
{
    $conn = dbConnect();

    // Prepare statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ? LIMIT 1");
    mysqli_stmt_bind_param($stmt, "s", $email);

    // Execute statement
    mysqli_stmt_execute($stmt);

    // Get result
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user['type'];
    } else {
        return false;
    }
}

// Get all doctors
function getAllDoctors()
{
    $conn = dbConnect();

    // Prepare statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM doctors");

    // Execute statement
    mysqli_stmt_execute($stmt);

    // Get result
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $doctors = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $doctors[] = $row;
        }
        return $doctors;
    } else {
        return false;
    }
}

function getAllInformations()
{
    $conn = dbConnect();

    // Prepare statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM informations");

    // Execute statement
    mysqli_stmt_execute($stmt);

    // Get result
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $informations = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $informations[] = $row;
        }
        return $informations;
    } else {
        return false;
    }
}

/// Reservation
function insertReservation($doctor, $date, $time, $email, $r_status)
{
    $conn = dbConnect();

    // Prepare statement
    $stmt = mysqli_prepare($conn, "INSERT INTO reservation (doctor, date, time, email, r_status) VALUES (?, ?, ?, ?, ?)");

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sssss", $doctor, $date, $time, $email, $r_status);

    // Execute statement
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return false;
    }
}

// get user by email
function getUserByEmail($email)
{
    $conn = dbConnect();

    // Prepare statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email=?");

    // Bind parameter
    mysqli_stmt_bind_param($stmt, "s", $email);

    // Execute statement
    mysqli_stmt_execute($stmt);

    // Get result
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $user;
    } else {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return false;
    }
}

// update user
function updateUser($user)
{
    $conn = dbConnect();

    // Escape user input to avoid SQL injection
    $username = mysqli_real_escape_string($conn, $user['username']);
    $password = mysqli_real_escape_string($conn, $user['password']);
    $email = mysqli_real_escape_string($conn, $user['email']);
    $phone = mysqli_real_escape_string($conn, $user['phone']);
    $address = mysqli_real_escape_string($conn, $user['address']);

    // Prepare statement
    $stmt = mysqli_prepare($conn, "UPDATE users SET username=?, password=?, phone=?, adress=? WHERE email=?");

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sssss", $username, $password, $phone, $address, $email);

    // Execute statement
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return true;
    } else {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return false;
    }
}
