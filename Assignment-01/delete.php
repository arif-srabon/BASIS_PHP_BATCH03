<?php
include_once('lib/application.php');
unset($_SESSION['myemails'][$_GET['id']]);
header('Location:index.php');
?>
