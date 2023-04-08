<?php
// Include header
include '../inc/sidebar.php';
require_once('../../../../model/userModel.php');

$infromations = getAllInformations();
?>

<!-- Go back -->
<a href="../dashboard.php" class="btn" style="text-decoration: none;">Go Back</a>
<h1>News and Information</h1>
<section class="news-container">
    <table>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Title</th>
            <th>Details</th>
        </tr>
        <?php
        foreach ($infromations as $infromation) {
            echo "<tr>";
            echo "<td>" . $infromation['id'] . "</td>";
            echo "<td>" . $infromation['date'] . "</td>";
            echo "<td>" . $infromation['title'] . "</td>";
            echo "<td>" . $infromation['details'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</section>