<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
    $variable1=34;
    $variable2=32;
    echo $variable1;
    echo $variable2;
    echo $variable1+$variable2;
    echo "<br>";
    echo "Hello there whath about you";
     echo "<br>";
     echo "<br>";
    echo "Hello there i am fine";
     echo "<br>";
    ?>
    <!-- Assignment Operator -->
     <?php 
     $newvar=$variable1;
     $newvar+=1;
     $newvar+=2;
     $newvar+=3;
     $newvar/=4;
     
     ?>
<!-- Conditional Statements -->
  <?php
   for($i=1;$i<=5;$i++){
    echo "Number: $i <br>";
   }
   $colors=["red","green","blue"];
   foreach($colors as $color){
    echo "Color: $color <br>";
   }
   
    ?>
    <!-- Loops -->
    <?php
   for($i=1;$i<=5;$i++){
    echo "Number: $i <br>";
   }
   $colors=["red","green","blue"];
   foreach($colors as $color){
    echo "Color: $color <br>";
   }

    ?>

    <!-- Conditional Statements -->
     <?php
     $marks=85;
     if($marks>=85){
        echo "Grade A <br>";
     }
     else if($marks>=60){
        echo "grade B <br>";
     }
     else{
        echo "Fail <br>" ;
     }
     ?>
     <!-- Arrays -->
      <?php
     $city=["Indore","Gwalior","Ujjain"];
     $country=["name"=>"India","GDP"=>"4.17tri."];
     $user=["name"=>"Kundan","age"=>"21"];
      $user=["name"=>"Sakshi","age"=>"22"];
      echo "$city[2]";

     ?>
</body>
</html>