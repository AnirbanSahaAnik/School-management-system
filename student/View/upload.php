<?php
$title = "Request for leave";
include('header.php');
include_once('../model/DatabaseConnection.php');
?>

<?php include('sideBar.php'); ?>

<td>
    <fieldset>
        <form class="" action="../Controller/uploadCheck.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Upload</legend>
                <input type="file" id="picture" name="picture"><br>
                <hr>
                <input type="submit" name="submit" value="submit">
            </fieldset>

        </form>
    </fieldset>
</td>
</tr>

<?php include('footer.php'); ?>