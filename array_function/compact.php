<?php
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", "nothing_here",$location_vars);//Create array containing variables and their values
echo "<pre>";
print_r($result);
echo "<pre>";


echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "<pre>";
$city="arif";
$arif="srabon";
$state=array("arif","sharif");
$location=compact($location_vars);
print_r($location);
echo "<pre>";
?>