<?php
// Include header
include '../inc/header.php';
$dir = dirname(__FILE__);
$dir = substr($dir, 0, strpos($dir, 'view'));
$file = fopen($dir . 'controller/infromation.txt', 'r');

$infromations = [];
while (!feof($file)) {
    $infromations[] = fgets($file);
}
fclose($file);
?>

<!-- Go back -->
<a href="../dashboard.php">Go Back</a>
<h3>News and Information</h3>
<table border="1">
    <tr>
        <th>Title</th>
        <th>Details</th>
    </tr>
    <?php
    foreach ($infromations as $infromation) {
        $infromation = explode('|', $infromation);
        echo "<tr>";
        echo "<td>" . $infromation[0] . "</td>";

        echo "<td>" . $infromation[1] . "</td>";
        echo "</tr>";
    }
    ?>
</table>