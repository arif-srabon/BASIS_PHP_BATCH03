<?php
include_once('lib/application.php');

debug($_SESSION);

if(!array_key_exists('myemails', $_SESSION))
{
$_SESSION['myemails']=array();
}

if (array_key_exists('firstname', $_POST) && !empty($_POST['firstname'])) {
   $_SESSION['myemails'][]= $_POST;
} else {
    echo "Not Defined";
}
header('Location:index.php');
//header('Location:index.php?email='.$_POST['email']);
?>