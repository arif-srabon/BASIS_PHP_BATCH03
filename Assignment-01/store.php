<?php
include_once('lib/application.php');
//function call
//$number=-3;
//function call
//debug($number);
//function call
//debug($_POST);
//function call
//debug($_POST);

if(array_key_exists('myemails', $_SESSION))
{
if (array_key_exists('firstname', $_POST) && !empty($_POST['firstname'])) {
   $_SESSION['myemails'][$_POST['id']]['firstname']= $_POST['firstname'];
   $_SESSION['myemails'][$_POST['id']]['lastname']= $_POST['lastname'];
   $_SESSION['myemails'][$_POST['id']]['mname']= $_POST['mname'];
   $_SESSION['myemails'][$_POST['id']]['dob']= $_POST['dob'];
   $_SESSION['myemails'][$_POST['id']]['gender']= $_POST['gender'];
   $_SESSION['myemails'][$_POST['id']]['ssn']= $_POST['ssn'];
   $_SESSION['myemails'][$_POST['id']]['facilityname']= $_POST['facilityname'];
   
} else {
    echo "Not Defined";
}
}


header('Location:index.php');
//header('Location:index.php?email='.$_POST['email']);
?>