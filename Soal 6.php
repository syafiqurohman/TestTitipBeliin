<!-- 
How do you print duplicate words from a sentence without using any library method?
-->

<?php
$string = "aku mau kamu jika kamu mau aku menjadi aku yang kamu mau";  
$count;  
  
$string = strtolower($string);  
     
$kata = explode(" ", $string);  
   
echo "Kata yang duplikat di kalimat : <br>";  
for($i = 0; $i < count($kata); $i++) {  
    $count = 1;  
    for($j = $i+1; $j < count($kata); $j++) {  
        if($kata[$i] == $kata[$j]) {  
            $count++;    
            $kata[$j] = "0";  
        }  
    }  
  
    if($count > 1 && $kata[$i] != "0"){  
        echo $kata[$i];  
        echo "<br>";  
    }  
}  
?> 