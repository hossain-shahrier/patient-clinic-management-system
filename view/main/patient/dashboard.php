<!-- Header -->
<?php include 'inc/sidebar.php';
require_once("../../../model/userModel.php");

if (isset($_COOKIE['problem'])) {
    $problem = $_COOKIE['problem'];
}
$email = $_SESSION['email'];
$username = userName($email);
?>

<!-- Content -->
<section class="dashboard-container">
    <h1 style="color: #3c58a0;font-weight: 800;">Welcome <?php echo $username; ?></h1>
    <div class="navigations">
        <div class="navigations-container">
            <a href="./infromation/" class="btn" style="text-decoration: none;">News and Information</a>
            <a href="./reservation/" class="btn" style="text-decoration: none;">Reservation</a>
            <a href="./upload/" class="btn" style="text-decoration: none;">Upload</a>
            <a href="./doctor/" class="btn" style="text-decoration: none;">Doctors</a>
            <a href="./account/" class="btn" style="text-decoration: none;">Profile</a>
            <a href="./account/logout.php" class="btn" style="text-decoration: none;">Logout</a>
        </div>
    </div>

    <div class="problem-info">
        <div>
            <?php
            if (isset($problem)) {
                echo "<span class='problem-title'><h3>Your problems that you have submitted</h3></span>";
                echo "<span class='problem-description'><h3>Your problem is: " . $problem . "</h3></span>";
                if ($problem == "Fever") {
                    echo "<span class='problem-recommendation'><h4>Maybe, you have problems of Dangue/A viral infection or anything</h4></span>";
                } elseif ($problem == "Cough") {
                    echo "<span class='problem-recommendation'><h4>Maybe, you have problems of Asthma or anything</h4></span>";
                } elseif ($problem == "Headache") {
                    echo "<span class='problem-recommendation'><h4>Maybe, you have problems of Migraine or anything</h4></span>";
                } elseif ($problem == "Stomachache") {
                    echo "<span class='problem-recommendation'><h4>Maybe, you have problems of Gastric or anything</h4></span>";
                } elseif ($problem == "Diarrhea") {
                    echo "<span class='problem-recommendation'><h4>Maybe, you have problems of Food Poisoning or anything</h4></span>";
                } elseif ($problem == "Vomiting") {
                    echo "<span class='problem-recommendation'><h4>Maybe, you have problems of Food Poisoning or anything</h4></span>";
                } elseif ($problem == "Pain") {
                    echo "<span class='problem-recommendation'><h4>Maybe, you have problems of Arthritis or anything</h4></span>";
                } elseif ($problem == "Chest Pain") {
                    echo "<span class='problem-recommendation'><h4>Maybe, you have problems of Heart Attack or anything</h4></span>";
                } elseif ($problem == "Breathing Problem") {
                    echo "<span class='problem-recommendation'><h4>Maybe, you have problems of Asthma or anything</h4></span>";
                } else {
                    echo "<span class='problem-recommendation'><h4>Maybe, you have problems of something else</h4></span>";
                }
                echo "<span class='problem-reservation'>It's recommended to take a reservation with a doctor. </span>";

                echo "<a href='./reservation' class='btn' style='text-decoration:none; margin-top:20px;'>Reservation</a>";
            } else {
                echo "";
            }
            ?>
        </div>

        <!-- Retirve date and time from cookie -->
        <?php
        if (isset($_COOKIE['date']) && isset($_COOKIE['time'])) {
            $date = $_COOKIE['date'];
            $time = $_COOKIE['time'];
            echo "<h3 style='color: #3c58a0;font-weight: 800;'>Your reservation date is: " . $date . "</h3>";
            echo "<h3 style='color: #3c58a0;font-weight: 800;'>Your reservation time is: " . $time . "</h3>";
        } else {
            echo "";
        }
        ?>
</section>

</div>
</div>
<!-- Footer -->
<?php include 'inc/footer.php' ?>