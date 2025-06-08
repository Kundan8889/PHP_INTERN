<?php
$limit=20;
$sum=0;
echo "Even numbers from 1 to $limit <br>";
    for ($i = 1; $i <= $limit; $i++) {
       if($i%2==0){
        echo " $i  <br>";
        $sum+=$i;
       }
    }
    echo "Total even num: $sum  <br>";
?>
