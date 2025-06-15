<?php
$con = new mysqli("localhost", "root", "", "db_server1");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
