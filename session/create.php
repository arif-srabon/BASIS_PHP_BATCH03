<?php
include_once 'lib/application.php';
$_SESSION['name']=array();
$_SESSION['name'][]=$_POST;
header("Location:index.php");
?>


