<!-- Header -->
<?php include 'inc/header.php';

if (isset($_COOKIE['problem'])) {
    $problem = $_COOKIE['problem'];
}
?>
<!-- Body -->
<div>
    <h1>Welcome <?php echo $username; ?></h1>
    <a href="./account">Profile</a>
    <a href="./doctor">Doctors</a>
    <a href="./reservation">Reservation</a>
    <a href="./upload">Upload</a>
    <a href="./infromation">News and Information</a>
    <a href="./account/logout.php">Logout</a>
</div>
<div>
    <ul>
        <?php
        if (isset($problem)) {
            echo "<h3>Your problems that you have submitted</h3>";
            echo "<h3>Your problem is: " . $problem . "</h3>";
            if ($problem == "Fever") {
                echo "<h4>Maybe, you have problems of Dangue/A viral infection or anything</h4>";
            } elseif ($problem == "Cough") {
                echo "<h4>Maybe, you have problems of Asthma or anything</h4>";
            } elseif ($problem == "Headache") {
                echo "<h4>Maybe, you have problems of Migraine or anything</h4>";
            } elseif ($problem == "Stomachache") {
                echo "<h4>Maybe, you have problems of Gastric or anything</h4>";
            } elseif ($problem == "Diarrhea") {
                echo "<h4>Maybe, you have problems of Food Poisoning or anything</h4>";
            } elseif ($problem == "Vomiting") {
                echo "<h4>Maybe, you have problems of Food Poisoning or anything</h4>";
            } elseif ($problem == "Pain") {
                echo "<h4>Maybe, you have problems of Arthritis or anything</h4>";
            } elseif ($problem == "Chest Pain") {
                echo "<h4>Maybe, you have problems of Heart Attack or anything</h4>";
            } elseif ($problem == "Breathing Problem") {
                echo "<h4>Maybe, you have problems of Asthma or anything</h4>";
            } else {
                echo "<h4>Maybe, you have problems of something else</h4>";
            }

            echo "It's recommended to take a reservation with a doctor. "
                // Reservation page link
                . "<a href='./reservation'>Reservation</a>";
        } else {
            echo "";
        }
        ?>
    </ul>
    <!-- Retirve date and time from cookie -->
    <?php
    if (isset($_COOKIE['date']) && isset($_COOKIE['time'])) {
        $date = $_COOKIE['date'];
        $time = $_COOKIE['time'];
        echo "<h3>Your reservation date is: " . $date . "</h3>";
        echo "<h3>Your reservation time is: " . $time . "</h3>";
    } else {
        echo "";
    }
    ?>
</div>

<!-- Footer -->
<?php include 'inc/footer.php' ?>