<?php

 function fiboNum($n){
     $f = 0;
     $s = 1;
 for ($i = 1; $i <=$n; $i = $i + 1) {
    $t= $f+$s;
    $f= $s;
    $s= $t;
  
    echo $t." ";
    
   
}
}
fiboNum(15);

?>