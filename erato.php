<?php

/*Написать задачу второго уровня не только своим способом, но еще и реализовать решето Эратосфена. 
Сравнить результаты написанной лично программы и реализованного алгоритма по времени для большой константы - количества подсчитываемых простых чисел.*/

define("PRIME_NUMBERS_COUNT", 100);

function getPrimaryNumbersSum($n){
    while ($count<$n){
          $div_count = 0; 
          for($i=1;$i<=$num;$i++){
                if($num % $i==0){ 
                      $div_count++;
                }
          }

          if($div_count==2){                      
                //print $num." is prime <br/>";
                $sum+=$num;
                $count=$count+1;
          }
          $num=$num+1;
    }
    return $num;
}

$limit= getPrimaryNumbersSum(PRIME_NUMBERS_COUNT);

function getPrimaryNumbers($n)
{
    $array = [];
    for($i = 2; $i <= $n; $i++) {
        $array[$i] = $i;
    } 

    $i =2;
    while($i * $i <= $n) {      
        if(isset($array[$i])) {
            $k = $i;
            $sum+=$k;
            while ($k * $i <= $n) {         
                unset($array[$k * $i]);
                $k++;
            }   
        }
    $i++;
    }           
    echo '<pre>';
    print_r($array);
    
    echo "Sum of the first ".$limit." prime numbers is: ".array_sum($array);
    echo '</pre>';
}

getPrimaryNumbers($limit);