
<?php
echo'<pre>';
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));
echo'<pre>';
$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));
echo'<pre>';
$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));

?>

