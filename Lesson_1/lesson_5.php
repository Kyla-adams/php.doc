<?php
Loops:
//We use loops to execute a block of code again and again as long as a certain condition is true

//In PHP,we have the following loop types:
//**1.while . loops through a block of code as long as the specified condition is true

//syntax
//while (condition){
//    code to execute
//}
$count = 0;
while($count < 20) { //First checks the condition. Loops only if condition is true
    if ($count == 0)
        echo $count. "Is not divisible by three <br>";

    elseif($count % 3 == 0){
        echo $count."Divisible by three <br>";

    }else{
        echo $count. "Not divisible by three <br>";
    }
    $count ++;
}
//$count: initialises the loop counter and sets the  start value
//$count < 20: continues the loop as long as $count is less than 20
//$count ++: increases the loop counter value by 1 for each loop/iteration


//2.**do...while - loop through a block of code once, and then repeats the loop as long as the specific
//syntax

//do{
//    code to execute
//}while (condition is true)

$x = 0;
do{
    echo "<div style='border: 2px solid crimson'>
                <p>$x</p>
          </div> <br>";
    $x ++;
}while ($x < 10);

//3.**for . loops through a block of code a specified number of times
//syntax
//for(initial value;text value;increment value){
//    code to be executed
//}
//initial value - Initialize the loop counter value;determines the starting of a loop
//If it evaluates to false, the loop ends.
//Increment value: Increases the loop counter value
//foreach - loops through a block of code for each element in an array

//for ($x = 0; $x < 10;$x+=2 );{
//    echo "<span>Value : $x</span> <br>";
//}
//
//for ($y = 0; $y < 100; $y % 5 == 0);{
//    echo '<div>Value : $y</div> <br>';
//}


//for-each loops through a block of code for element in an array


//Assignment:
//Using a for loop from 0-100. if a number is a multiple of 3 echo "fizz"
//if a number is a multiple of 5 echo "BUZZ". if a number is a multiple of both 3 and 5
//echo FIZZBUZZ, otherwise echo the number

//soln 1 to assgn
for ($x=0; $x<=100;$x++)
    if ($x==0){
        echo $x. "is not divisible by 3 or 5<br>";
    }
    elseif (
        $x %15==0){
        echo $x. 'FIZZBUZZ <br>';
    }
    elseif (
        $x %3==0){
       echo $x. 'FIZZ <br>';
    }
    elseif (
        $x %5==0){
        echo $x. 'BUZZ <br>';
    }

   else {
        echo $x. "not divisible <br>";
    }

//soln 2 to assgn
for ($i=100; $i<100; $i++)
    if ($i==0){
        echo $i. "is not divisible by 3 or 5<br>";
    }
    if ($i % 3 == 0 and $i % 5 ==0){
        echo '$i FIZZBUZZ <br>';
    }
    elseif (
        $i %3==0){
        echo $i. 'FIZZ <br>';
    }
    elseif (
        $i %5==0){
        echo $i. 'BUZZ <br>';
    }

    else {
        echo $i. "not divisible <br>";
    }








