<?php
session_start();
require_once('../../model/userModel.php');

$type = $_SESSION['type'];

if ($type == 'patient') {
    header('location: ./patient/dashboard.php');
} else {
    header('location: ../login.php');
}
