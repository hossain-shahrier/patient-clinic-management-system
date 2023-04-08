<?php
include '../inc/sidebar.php';
require_once('../../../../model/userModel.php');

?>
<section>
    <div>
        <h1>Tell us about your problems</h1>
        <form action="../../../../controller/problemController.php" method="POST" enctype="multipart/form-data">
            <label for="problem">Problem</label>
            <input type="text" name="problem" id="problem">
            <br>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
            <br>
            <input type="file" name="upload" id="file">
            <br>
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>
    <hr>
    <div>
        <h1>Upload prescription</h1>
        <form action="../../../../controller/prescriptionController.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="upload" id="file">
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>
</section>
</div>