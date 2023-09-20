<?php
/*Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also.
*/

 function evenNumbers($start,$end,$step) //parameter
 {
    echo "Using For Loop: ";
    for ($i =2; $i <= $end; $i=$i+$step) {
        if ($i % 2 == 0) {
            echo $i." ";
            
        
    }
    }

 }
 evenNumbers(1,20,2); //argument





 function evenNumberWhile($start,$end,$step){
     $i =2;
     echo"<br>";
     echo"Using while loop: ";
    while ( $i <= $end) {
        if ($i % 2 == 0) {
            
            echo $i." ";
            
           
            $i=$i+$step;
        
    }
    }

 }
 evenNumberWhile(1,20,2);


 function evenNumberDoWhile($start,$end,$step){
     $i =2;
     echo"<br>";
     echo"Using Do-while loop: ";
     do{
         echo $i." ";
        $i=$i+$step;
     }
    while ( $i <= $end-2); //We can erase -2 if we print extra number but as we know do-while loop do echo before condition check.
    {
        if ($i % 2 == 0) {
            echo $i." ";
           
        }
    }

 }
 evenNumberDoWhile(1,20,2);



