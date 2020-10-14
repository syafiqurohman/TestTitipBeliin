<!-- How do you find duplicate numbers in an array if it contains multiple duplicates without using
any library?
Ex: [10,22,89,88,65,22,10,77,88,8,6,2,4,12,3,4,4,2,1,2,3] -->

<?php 
    $a = array(10,22,89,88,65,22,10,77,88,8,6,2,4,12,3,4,4,2,1,2,3); 
      
    echo "Original Array : \n"; 
    print_r($a); 
     
    $a = array_flip($a); 
   
    $a = array_flip($a); 
  
    $a= array_values($a); 
   
    echo "\nUpdated Array : \n "; 
    print_r($a); 
?> 