<?php
// Insert user into user.txt file
function insertUser($user)
{
    $dir = dirname("../controller/user.txt");
    $file = fopen($dir . '/user.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $user['email']) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return false;
    } else {
        $file = fopen('user.txt', 'a');
        $user = $user['username'] . '|' . $user['password'] . '|' . $user['email'] . '|' . $user['phone'] . '|' . $user['address'] . '|' . $user['type'] . "|" . "\n";
        fwrite($file, $user);
        fclose($file);
        return true;
    }
}
// Validate user
function validateUser($email, $password)
{
    $dir = dirname("../controller/user.txt");
    $file = fopen($dir . '/user.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[1] == $password && $user_data[2] == $email) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return true;
    } else {
        return false;
    }
}
// Get user name
function userName($email)
{
    $dir = dirname("../controller/user.txt");
    $file = fopen($dir . '/user.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $email) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return $user_data[0];
    } else {
        return false;
    }
}

// get user type
function userType($email)
{
    $dir = dirname("../controller/user.txt");
    $file = fopen($dir . '/user.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $email) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return $user_data[5];
    } else {
        return false;
    }
}

// get all doctors
function getAllDoctors()
{
    $dir = dirname("../../../../controller/user.txt");
    $file = fopen($dir . '/doctor.txt', 'r');
    $doctors = [];
    while (!feof($file)) {
        $data = fgets($file);
        array_push($doctors, $data);
    }
    fclose($file);
    return $doctors;
}
// Reservation
function insertReservation($doctor, $date, $time, $email, $r_status)
{
    $dir = dirname("../controller/reservation.txt");
    $file = fopen($dir . '/reservation.txt', 'a');
    $reservation = $doctor . '|' . $date . '|' . $time . '|' . $email . "|" . $r_status . "|" . "\n";
    fwrite($file, $reservation);
    fclose($file);
    return true;
}
// get user by email
function getUserByEmail($email)
{
    $dir = dirname("../../../../controller/user.txt");
    $file = fopen($dir . '/user.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $email) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return $user_data;
    } else {
        return false;
    }
}
// Get all user
function getAllUser()
{

    $dir = dirname("../controller/user.txt");
    $file = fopen($dir . '/user.txt', 'r');
    $users = [];
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[0] != "") {
            array_push($users, $user_data);
        }
    }
    fclose($file);
    return $users;
}
// update user
function updateUser($user)
{
    $dir = dirname("../controller/user.txt");
    $file = fopen($dir . '/user.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $user['email']) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        $file = fopen('user.txt', 'w');
        $user = $user['username'] . '|' . $user['password'] . '|' . $user['email'] . '|' . $user['phone'] . '|' . $user['address'] . '|' . $user['type'] . "|" . "\n";
        fwrite($file, $user);
        fclose($file);
        return true;
    } else {
        return false;
    }
}

