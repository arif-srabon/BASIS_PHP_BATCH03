


<?php
//$input_array = array("FirSt" => 1, "SecOnd" => 4);
//print_r(array_change_key_case($input_array, CASE_UPPER));
$value=array("first"=>1, 'second'=>4 ,'third'=>5);
$change=  array_change_key_case($value, CASE_UPPER);
echo "<pre>";
print_r($change);
echo "<pre>";
?>



