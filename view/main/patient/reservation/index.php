<!-- Reservation page -->
<?php
include '../inc/sidebar.php';
require_once('../../../../model/userModel.php');
$doctors = getAllDoctors();
?>

<a href="../dashboard.php" class="btn" style="text-decoration: none;">Go Back</a>
<section class="reservation-container">
    <form action="../../../../controller/reservationController.php" method="POST">
        <label for="doctor">Doctor</label>
        <select name="doctor" id="doctor">
            <?php
            foreach ($doctors as $doctor) {

                echo "<option value='" . $doctor['name'] . "'>" . $doctor['name'] . " - " . $doctor['specialty'] . "</option>";
            }
            ?>
        </select>
        <br>
        <label for="date">Date</label>
        <input type="date" name="date" id="date">
        <br>
        <label for="time">Time</label>
        <input type="time" name="time" id="time">
        <br>
        <input type="submit" name="submit" value="Submit" class="btn">
    </form>
</section>