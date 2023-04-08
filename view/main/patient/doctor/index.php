<!-- Account Details page -->
<?php
include '../inc/sidebar.php';
require_once('../../../../model/userModel.php');

$doctors = getAllDoctors();
?>
<a href="../dashboard.php" class="btn" style="text-decoration: none;">Go Back</a>

<section class="doctor-container">
    <?php
    if ($doctors) {

        echo "<table>";
        echo "<tr><th>Name</th><th>Specialty</th><th>Address</th></tr>";

        // Loop through each doctor and display their information
        foreach ($doctors as $doctor) {
            echo "<tr>";
            echo "<td>" . $doctor['name'] . "</td>";
            echo "<td>" . $doctor['specialty'] . "</td>";
            echo "<td>" . $doctor['address'] . "</td>";
            echo "</tr>";
        }

        // Close the HTML table
        echo "</table>";
    } else {
        // Display a message if no doctors were found
        echo "No doctors found.";
    }
    ?>
</section>