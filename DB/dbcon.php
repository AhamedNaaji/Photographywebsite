<?php
$con = new mysqli("localhost", "root", "", "photography");
if ($con->connect_error) {
    die("Connection failed");
}
