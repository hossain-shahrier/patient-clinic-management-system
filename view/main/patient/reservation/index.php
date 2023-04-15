<!-- Reservation page -->
<?php
include '../inc/sidebar.php';
require_once('../../../../model/userModel.php');
$doctors = getAllDoctors();
?>

<a href="../dashboard.php" class="btn" style="text-decoration: none;">Go Back</a>
<section class="reservation-container">
    <form action="../../../../controller/reservationController.php" method="POST" id="form" name="reservation" onsubmit="return validation()">
        <label for="doctor">Doctor</label>
        <select name="doctor" id="doctor">
            <?php
            foreach ($doctors as $doctor) {

                echo "<option value='" . $doctor['name'] . "'>" . $doctor['name'] . " - " . $doctor['specialty'] . "</option>";
            }
            ?>
        </select>
        <span id="error-doctors" style="color:red;"></span>
        <br>
        <label for="date">Date</label>
        <input type="date" name="date" id="date">
        <span id="error-date" style="color:red;"></span>

        <br>
        <label for="time">Time</label>
        <input type="time" name="time" id="time">
        <span id="error-time" style="color:red;"></span>

        <br>
        <input type="submit" name="submit" value="Submit" class="btn">
    </form>
</section>
<script src="./public/index.js"></script>