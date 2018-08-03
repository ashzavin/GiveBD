<?php
/*session_start();

if(!isset($_SESSION["nm"]))
{
 header("Location: in.php");
}
else if(isset($_SESSION['nm'])!="")
{
 header("Location: pro.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['nm']);
 header("Location: in.php");
}*/

include "init.php";
session_start();
unset($_SESSION["nm"]);
session_destroy();

header("Location: log.php");
exit;
?>