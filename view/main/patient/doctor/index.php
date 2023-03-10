<!-- Account Details page -->
<?php
// Include header
include '../inc/header.php';
require_once('../../../../model/userModel.php');

$doctor = getAllDoctors();
?>
<div>
    <ul>
        <?php
        for ($i = 0; $i < count($doctor); $i++) {
            echo  "<li style='list-style: none;'>" . $i + 1 . ". " . $doctor[$i] . "</li>";
            echo "<br>";
        }
        ?>
    </ul>
</div>