<?php
include '../inc/sidebar.php';
require_once('../../../../model/userModel.php');

?>
<section>
    <div>
        <h1>Tell us about your problems</h1>
        <form action="../../../../controller/problemController.php" method="POST" enctype="multipart/form-data" id="form" name="problem" onsubmit="return validation()">
            <label for=" problem">Problem</label>
            <input type="text" name="problem" id="problem">
            <span id="error-problem" style="color:red;"></span>

            <br>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
            <span id="error-description" style="color:red;"></span>

            <br>
            <input type="file" name="upload" id="file">
            <span id="error-file" style="color:red;"></span>

            <br>
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>
    <hr>
    <div>
        <h1>Upload prescription</h1>
        <form action="../../../../controller/prescriptionController.php" method="POST" enctype="multipart/form-data" id="form" name="prescription" onsubmit="return prescriptionValidation()">
            <input type="file" name="upload" id="file">
            <span id="error-pfile" style="color:red;"></span>
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>
</section>
</div>
<script src="./public/index.js"></script>