<?php
//Besides the built-in PHP functions, it is possible to create your own functions
//A function is a block of statement s that can be used repeatedly in a program./does a specific task
//A function will not execute automatically when a page loads
//A function will be executed by a call to the function

//syntax

//function function_name(){
//    code_to_execute_ONLY_WHEN_THIS_FUNCTION_IS_CALLED/USED
//}

//function creation/declaration
function greetings(){
    echo 'Hello world';
}

//using a function/calling a function;USE THE FUNCTION NAME FOLLOWED BY PARENTHESIS
greetings();

function greetings_1(){
    echo '<p>My favourite meal is chicken wings</p>';
}
greetings_1();

function greetings_2($name,$age){
    echo 'Hello '.$name." You are ".$age."<br><br>";
}
greetings_2('John','23');
//greetings_2();//call these functions with enough arguments

//Functions with default arguements
function greetings_3($name="PHP",$country="Kenyan"){
    echo "I am a $name developer from $country".'<br>';
}
greetings_3();
greetings_3("Java","UK");

//Functions that returns values
function greetings4($name){
    $get_name = $name;
    return $name;
}
$found_name = greetings4("Adam <br><br>");
echo $found_name;

function area_of_circle($radius){
//    $area => pie * r * r;
    $pie = 3.142;
    $area = $pie * $radius * $radius;
    return $area;
}
$cr1 = 7;
$cr2 = 14;
$areaC1 = area_of_circle($cr1);
$areaC2 = area_of_circle($cr2);
echo $areaC1;
echo $areaC2;

//function that takes an array as an arguement
function loopArray($array_name, $myforeach=true)
{
    if ($myforeach) {
        echo "FOR EACH LOOP <br>";
        foreach ($array_name as $item) {
            echo "$item <br>";
        }
    } else {
        echo "FOR LOOP <br>";
//    get the length of array
//    FOR LOOP
        $length = count($array_name);
        for ($s = 0; $s < $length; $s++) {
            echo "$array_name[$s]<br>";
        }
    }
}


$games = array ("GTA","NFS","PES","MORTAL KOMBAT","JACK RYAN","ANGRY BIRDS","CANDY CRUSH<br>");
loopArray($games);
loopArray($games, $myforeach=false);

//Assignment:
//write a function that calculates the area of circle and prints the results with unit of measurement chosen.
// this function should have options for unit of measurements

function area_units($radius, $cm=true){
    $pie = 3.142;
    $area = $pie * $radius * $radius;
    if ($cm){
//        area in cm
        echo "Area is $area cm";
    }else{
        echo "Area is $area m".'<br><br>';
    }
}
area_units("7");
area_units("14", $cm=false);



