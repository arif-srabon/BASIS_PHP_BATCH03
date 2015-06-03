<?php
include_once 'lib/application.php';
//debug($_POST);
//debug($_SESSION);
if(array_key_exists('myemails',$_SESSION))
{
    if (array_key_exists('race', $_POST) && !empty($_POST['race'])) {
   $_SESSION['myemails'][$_POST['id']]['race']= $_POST['race'];
   
} else {
    echo "Not Defined";
}
}
header('location:index.php');
?>
