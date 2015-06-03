<?php
$transport=array('foot','bike','car','plane');
$mode=each($transport);//each — Return the current key and value pair from an array and advance the array cursor

echo "<pre>";
print_r($mode);
echo "<pre>";
$mode=each($transport);
echo "<pre>";
print_r($mode);
echo "<pre>";
$mode=each($transport);
echo "<pre>";
print_r($mode);
echo "<pre>";
$mode=each($transport);
echo "<pre>";
print_r($mode);
echo "<pre>";
reset($transport);//After each() has executed, the array cursor will be left on the next element of the array,
// or past the last element if it hits the end of the array. 
//You have to use reset() if you want to traverse the array again using each.
$mode=each($transport);
echo "<pre>";
print_r($mode);
echo "<pre>";
reset($transport);
$mode=each($transport);
echo "<pre>";
print_r($mode);
echo "<pre>";
?>
