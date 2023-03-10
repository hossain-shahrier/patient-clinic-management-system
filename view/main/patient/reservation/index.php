<!-- Reservation page -->
<?php
// Include header
include '../inc/header.php';
require_once('../../../../model/userModel.php');
$doctors = getAllDoctors();
?>
<div>
    <form action="../../../../controller/reservationController.php" method="POST">
        <fieldset>
            <legend>Reservation</legend>
            <label for="doctor">Doctor</label>
            <select name="doctor" id="doctor">
                <?php
                foreach ($doctors as $doctor) {
                    $doctor_data = explode('|', $doctor);
                    echo "<option value=" . $doctor_data[0] . ">" . $doctor_data[0] . "</option>";
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
            <input type="submit" name="submit" value="Submit">
        </fieldset>
</div>