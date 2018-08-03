<?php

include "dbConnecta.php";
session_start();

$generic=$_GET["generic"];
$company=$_GET["company"];

$_SESSION['generic']=$generic;
$_SESSION['company']=$company;

include "msearch1.php";


?>