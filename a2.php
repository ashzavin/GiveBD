<?php

include "dbConnecta.php";
session_start();

$mix=$_GET["mix"];
$_SESSION['mix']=$mix;


include "msearch.php";


?>