<!-- Reservation controller -->
<?php
session_start();
require_once("../model/userModel.php");
if (isset($_POST['submit'])) {
    $doctor     = $_POST['doctor'];
    $date       = $_POST['date'];
    $time       = $_POST['time'];
    $email      = $_SESSION['email'];
    $r_status     = 'pending';
    if (empty($doctor) || empty($date) || empty($time)) {
        echo "Null Input";
    } else {
        $status     = insertReservation($doctor, $date, $time, $email, $r_status);
        if ($status) {
            // Get value from reservation.txt
            

            setcookie('date', $date, time() + 3600, '/');
            setcookie('time', $time, time() + 3600, '/');


            header('location: ../view/main/home.php');
        } else {
            echo "Invalid User";
        }
    }
} else {
    echo "Invalid Request";
}
