<?php
//Conditional statements are used  to perform different actions based on different conditions
//to allow your code to perform diff actions based on diff variables.
//php has the following if conditional statements

//1. if statement . executes some code if one condition is true
//2. if...else statement . executes some code if a condition is true and another code
// if that condition is false
//3. if elseif...else statement . executes different codes for more than two conditions
//switch statement . selects one of many blocks of code to be executed

//**1. IF statement
//if(condition_to_examine){
//    code_to_be_executed_if_condition_is_TRUE
//}
$db_first_name = 'kyla adam';
$user_name = 'kyla adam';
if ($user_name == $db_first_name) {
    echo '<p>Credentials matched. You can login...</p>';
}

$age = 19;
if ($age < 18)
{echo "<h1>You cannot take alcohol</h1>";
}
echo '<br>';

//**2. IF...else statement
$age = 20;
if ($age < 18)
{echo "<h1>You cannot take alcohol</h1>";
}else{echo '<h1>Hurray, you are old enough, grab a crate</h1>';
}
echo '<br>';

//**3. IF elseif...else statement statement executes different codes for more than two conditions
//if(condition to examine){
//    code to be executed if condition is TRUE
//}elseif(condition){
//    code to be executed if the 1st condition is false, and this condition is true
//}else {
//    code to be executed if the 2st condition is false, and this condition is true
//}else {
//    code to be executed if all conditions false
//}
//
$Age = 20;
$kenyan = false;
if ($Age < 18)
{echo "<h1>You cannot take alcohol</h1>";
}elseif($kenyan == true){
    echo '<h1>Hurray, you are old enough, grab a crate</h1>';
}else{
    echo '<h3>You are underage and not Kenyan, you are kidding!!!</h3>';
}
echo '<br>';

//Assignment:
//1. Using a conditional statement, check if 100 is a multiple of 2:
//if true echo "100 is a multiple of 2" else echo "100 is not a multiple of 2"
//2. Write code that calculates the volume of a cylinder of height 14 and diameter 14.
//echo "This is the cylinder to use if the volume is greater than 10"

$Divisor = 2;
$Quotient = 100;
$div = $Quotient / $Divisor;
echo $div;
if ($div == $mod = $Quotient % $Divisor) {
    echo "<h1>100 is a multiple of 2</h1>";
}else{
    echo '<h1>100 is not a multiple of 2</h1>';
}

$height = 14;
$diameter = 14;
$pie = (22/7);
$vol = $pie*($diameter/2)*$height;
echo $vol;
if ($vol > 10 ) {
    echo "<h1>This is the cylinder to use</h1>";
}

//switch statement - selects one of many blocks to be executed
//switch syntax
//switch (n){

//    case label1:
//        code to execute if n = label1
//        break
//
//    case label2:
//        code to execute if n = label2
//         break
//
//    case label3:
//         code to execute if n = label3
//         break
//
//    case label4:
//         code to execute if n = label4
//         break
//
//    default:
//        Code to be executed
//}


$favteam = 'ManCity';
switch ($favteam){
    case 'Man-Utd':
        echo '<p>Man-Utd at position 5</p>';
        break;

    case 'Liverpool';
        echo '<p>Liverpool at position 1</p>';
        break;

    case 'Leicester';
        echo '<p>Leicester at position 2</p>';
        break;

    case 'Man-City';
        echo '<p>Man-city at position 3</p>';
        break;

    default;
        echo '<p style="color: crimson">None of the above is my favourite team</p>';

}

























































