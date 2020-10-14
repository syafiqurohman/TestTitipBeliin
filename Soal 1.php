<!-- 
How do you find the missing number in a given integer array of
[1,2,3,4,6,10,12,13,14,15,16,19,20] 
-->

<?php

$arr1 = array(1,2,3,4,6,10,12,13,14,15,16,19,20);
$arr2 = range(1,20);
 
$missing = array_diff($arr2,$arr1);
echo "angka yang hilang :<br>";
foreach ($missing as $key){
echo "$key, ";
}

?>