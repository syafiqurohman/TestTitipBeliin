<!-- 
How do you reverse words in a given sentence without using any library method? Ex: Kucing
makan tikus => tikus makan kucing 
-->

<?php
$string = "Kucing Makan Tikus";
$spaceCount = substr_count($string, " ");
$letterIndx = 0;

for($i=0; $i<=$spaceCount; $i++) {
  $spaceIndx = strpos($string, " ", $letterIndx);
  if ($spaceIndx == 0) {
    $word = substr($string, $letterIndx);
  } else {
    $word = substr($string, $letterIndx, $spaceIndx - $letterIndx);
  }
  $myArray[] = $word;
  $letterIndx = $spaceIndx + 1;
}

$reverse = array_reverse($myArray);

foreach($reverse as $rev) {
  echo $rev." ";
}
?> 