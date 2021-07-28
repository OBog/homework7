<?php
/* Написать программу подсчета суммы всех простых чисел вплоть до сотого по счету простого числа. Константа - количество подсчитываемых простых чисел*/

define("PRIME_NUMBERS_COUNT", 100);
$count=0 ;
$sum=0;
$num=2;

function getPrimaryNumbersSum($n){
      while ($count<$n){
            $div_count = 0; 
            for($i=1;$i<=$num;$i++){
                  if($num % $i==0){ 
                        $div_count++;
                  }
            }

            if($div_count==2){                      
                  print $num." is prime <br/>";
                  $sum+=$num;
                  $count=$count+1;
            }
            $num=$num+1;
      }
      echo "Sum of the first ".PRIME_NUMBERS_COUNT." prime numbers is: ".$sum;
}

getPrimaryNumbersSum(PRIME_NUMBERS_COUNT);

    

    