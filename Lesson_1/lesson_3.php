<?php
//PHP operators
//used to perform operations on variables and values
//**php has the following operators
//1. Arithmetic operators
//2. Assignment ops
//3. Comparison ops
//4. Logical ops

//**1.Arithmetic ops
//+: Addition
$x = 23;
$y = 234;
$sum = $x + $y;
echo $sum. "<br>";
echo 'The sum of 23 and 234 is '. $sum.'<br>';
echo 23 + 234;
echo "<br><br>";

//- : Subtraction
$x = 23;
$y = 234;
$sub = $y + $x;
echo $sub. "<br>";
echo 'The sub of 234 and 23 is '. $sub.'<br>';
echo 234 - 23;
echo "<br><br>";

//* :Multiplication
$x = 23;
$y = 234;
$mult = $y * $x;
echo $mult. "<br>";
echo 'The product of 234 and 23 is '. $mult.'<br>';
echo 234 * 23;
echo "<br><br>";

//% :Modulus
$x = 3;
$y = 2;
$mod = $x % $y;
echo $mod. "<br>";
echo 'The mod of 3 and 2 is '. $mod.'<br>';
echo 3 % 2;
echo "<br><br>";

//{/} :Division
$x = 23;
$y = 234;
$div = $y / $x;
echo $div. "<br>";
echo 'The div of 234 and 23 is '. $div.'<br>';
echo 234 / 23;
echo "<br><br>";

//** :Exponential
echo 2**3;

//**2. Assignment ops
//used to write a value to a variable
$car = 'Benz';
$i = 12;
$fl = 12.23;
//Assignment ops with other arithmetic ops
$s = 30;

$sum = $i+$s;
$i = $i+= $s;
echo '<br>';
echo $i;
echo '<br>';

$a = 100;
$b = 200;
$a += 100;
echo $a;
echo '<br>';

$sub = $i-$s;
$i = $i-= $s;
echo '<br>';
echo $i;
echo '<br>';

$mult = $i*$s;
$i = $i*= $s;
echo '<br>';
echo $i;
echo '<br>';

$div = $i/$s;
$i = $i/= $s;
echo '<br>';
echo $i;
echo '<br>';

//**3. Comparison ops
//used to compare values
//Comparison ops return a boolean data types: true, false
//-------------------
//1. == (equal)

$f = 2;
$t = 3;
$k = 2;
$ans = $f == $k;
var_dump($ans);
echo '<br>';

//data from the db
$db_username = "kylaadam";
$db_password = "deadpool";

//data from user
$user_username = 'aikedoe';
$user_password = 'deadpool';

$check = $db_username == $user_username;
var_dump($check);
echo '<br>';

//------------------------
//2. Identical data:
//returns true if one variable is equal to another variable and these two
//variables are of the same datatype
$check = $db_password == $user_password;
var_dump($check);
echo '<br>';

//3. != : not equal to:
//returns true if two variables are not equal
$check = $db_username != $user_username;
var_dump($check);
echo '<br>';

//4. !== : not identical: returns true if two variables are not identical
$check = $db_username !== $user_username;
var_dump($check);
echo '<br>';

//5. > :Greater than: returns true if value is greater than the other value
$myname = 'Kyla adam';
$yourname = 'gopher';
$result = strlen($myname) > strlen($yourname);
var_dump($result);
echo '<br>';

//6. < :Less than: returns true if value is less than the other value
$myname = 'Kyla adam';
$yourname = 'gopher';
$result = strlen($myname) < strlen($yourname);
var_dump($result);
echo '<br>';

//7. >= :Greater than or equals to: returns true if value is greater than or equals to the other value
$myname = 'Kyla adam';
$yourname = 'gopher';
$result = strlen($myname) >= strlen($yourname);
var_dump($result);
echo '<br>';

//8. >= :Less than or equals to: returns true if value is less than or equals to the other value
$myname = 'Kyla adam';
$yourname = 'gopher';
$result = strlen($myname) <= strlen($yourname);
var_dump($result);
echo '<br>';

//***4.LOGICAL OPS
//Used to combine conditional statements
//1. and; returns true if two operations are true
$X = 100;
$Y = 200;
if($X == 100 and $Y == 200){
    echo '<h1> It is true $X is equal to 100 and $Y is equal to 200</h1>';
}
echo '<br>';

//2. or: returns true if either one of two operations is true
$X = 100;
$Y = 200;
if($X == 300 or $Y != $X){
    echo '<h1> It is true $X is equal to 100 and $Y is not equal to 200</h1>';
}
echo '<br>';

if($X == 300 || $Y != $X){
    echo '<h1> It is true $X is equal to 100 and $Y is not equal to 200</h1>';
}
echo '<br>';


//3. ! not: returns true if a variable is false
echo !($X == 100 and $Y ==200);
var_dump($check);













