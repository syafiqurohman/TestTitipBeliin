<!-- 
How do you remove duplicates value from an array PHP without using any library?
Ex: [10,22,89,88,65,22,10,77,88,8,6,2,4,12,3,4,4,2,1,2,3] 
-->


<?php
$inputArray = array(10,22,89,88,65,22,10,77,88,8,6,2,4,12,3,4,4,2,1,2,3);
$outputArray = array();

foreach($inputArray as $inputArrayItem) {
    foreach($outputArray as $outputArrayItem) {
        if($inputArrayItem == $outputArrayItem) {
            continue 2;
        }
    }
    $outputArray[] = $inputArrayItem;
}
print_r($outputArray);
?>