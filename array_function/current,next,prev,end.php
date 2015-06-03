<?php
$transport = array('foot', 'bike', 'car', 'plane');
$mode=current($transport);//current foot
echo $mode."</br>";
$mode=next($transport);// next bike
echo $mode."</br>";
$mode=current($transport);//current bike
echo $mode."</br>";
$mode=prev($transport);//previous foot
echo $mode."</br>";
$mode=end($transport);// end plane
echo $mode."</br>";
$mode=prev($transport);// previous car
echo $mode."</br>";
$mode=current($transport);//current car
echo $mode."</br>";
$mode=next($transport);// next plane
echo $mode."</br>";
$mode=  current($transport);// next bike
echo $mode."</br>";
$mode=next($transport);// next plane
echo $mode."</br>";
$mode=  current($transport);// next plane
echo $mode."</br>";
$mode=end($transport);
echo $mode."</br>";

$arr = array();
var_dump(current($arr)); // bool(false)
echo "</br>";
$arr = array(array());
var_dump(current($arr)); // array(0) { }
?>