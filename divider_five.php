<?php

define("DIVIDER", 5);
$limit = 100;
$counter=0;

for ($i=1; $i <= $limit; $i++) {
    if ($i % DIVIDER==0){
        $counter++;
    }       
}
echo $counter;