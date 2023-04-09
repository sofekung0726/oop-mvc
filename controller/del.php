<?php
echo $c_id = $_GET["id"];

include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name = new Course();
echo $rs2 = $obj_name->delCourse($c_id);
header("location: ../index.php");
exit(0);
?>
