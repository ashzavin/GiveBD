<?php
include "init.php";
session_start();
$email = $_SESSION["nm"];

$sql = "SELECT * FROM useri where email like '$email'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>