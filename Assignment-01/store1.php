<?php
include_once('lib/application.php');
//function call
//$number=-3;
//function call
//debug($number);
//function call
//debug($_POST);
//function call
//debug($_SESSION);
//debug($_POST);


if(array_key_exists('myemails', $_SESSION))
{
if (array_key_exists('origin', $_POST) && !empty($_POST['origin'])) {
   $_SESSION['myemails'][$_POST['id']]['origin']= $_POST['origin'];
   
} else {
    echo "Not Defined";
}
}


header('Location:index.php');
//header('Location:index.php?email='.$_POST['email']);
?>
