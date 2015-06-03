<?php
include_once 'lib/application.php';
//debug($_POST);
//debug($_SESSION);
if(array_key_exists('myemails',$_SESSION))
{
    if (array_key_exists('manner', $_POST) && !empty($_POST['manner'])) {
   $_SESSION['myemails'][$_POST['id']]['manner']= $_POST['manner'];
   
} else {
    echo "Not Defined";
}
}
header('location:index.php');
?>