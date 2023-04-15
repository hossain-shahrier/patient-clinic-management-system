<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['email']) || !isset($_SESSION['type'])) {
    header('location: ../../login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="public/css/style.css" />
    <title>Patient</title>
</head>

<body>
    <div class="sidebar">
        <div class="container">
            <div class="logo">
                <div style="display: flex;flex-direction: column; align-items: center; justify-content: center; gap: 10px;">
                    <a href="../account/">
                        <h1>Healthify</h1>
                    </a>
                </div>
            </div>
            <div style="width: 50%;">
                <ul class="menu">
                    <li><a href="../dashboard.php">Home</a></li>
                    <li><a href="../doctor/">Doctors</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content">