<?php 
/*Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.
*/
 
 $f = 0;
 $s = 1;
 $n = 10;
 
 for ($i = 1; $i <=$n; $i = $i + 1) {
    $t= $f+$s;
    $f= $s;
    $s= $t;
    if ($t > 100) {
        break;
        
    }
    echo $t."";
    echo "<br>";
}
