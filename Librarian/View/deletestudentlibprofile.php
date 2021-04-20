<?php
require_once('../Model/usersmodel.php');
$roll = $_GET['roll'];
$deletestudentlibinfo = deletestudentlibprofile($roll);

?>
<a href="dashboard.php">Back to Dashboard</a>