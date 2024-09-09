<?php
require 'dbcon.php';
$StuID = $_GET['id'];
$qry = "DELETE FROM student WHERE StuID=$StuID";
$res = $con->query($qry);

if (!$res) {
    die("Error");
} else {
    header("Location: view.php?msg=123");
}
