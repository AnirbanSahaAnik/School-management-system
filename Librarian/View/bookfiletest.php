<?php
$issuesdate = date("Y/m/d");
print_r($issuesdate);
echo "<br>";
$rdate =strtotime("tomorrow");
$returndate = date("Y/m/d",$rdate);
print_r($returndate);

// $returndate = date("Y/m/d") - time();
$rdate =strtotime("tomorrow");
$returndate = date("Y/m/d",$rdate);
print_r($returndate);
// print_r(date("Y-m-d",$$rdate));
// print_r(time());
// $issuesdate = date("Y/m/d")+;


?>