<?php
//ARRAY - stores multiple values in one single variable;
// An array is a special variable, which can hold more than one value at a time
$fruit1 = 'Mango';
$fruit2 = 'Orange';
$fruit3 = 'Apple';
$fruit4 = 'Avocado';
$fruit5 = 'Pineapple';
$fruit6 = 'Guava';
$fruit7 = 'Watermelon';
//Create an Array in PHP
//In PHP the array() function is used to create an array:

$fruits = array ('Mango','Orange','Apple','Avocado','Pineapple','Guava','Watermelon');
//echo $fruits;
//Count number of items in an array: use count()function
$num_items = count($fruits);
echo $num_items. '<br>';

//Accessing array items: use square brackets [] with index inside
echo $fruits[0].'<br>';
echo $fruits[1].'<br>';
echo $fruits[2].'<br>';
echo $fruits[3].'<br>';
echo $fruits[4].'<br>';
echo $fruits[5].'<br>';
echo $fruits[6].'<br>';
echo "My favourite fruit is ".$fruits[0]." and ".$fruits[3].'<br><br>';

//Looping through an indexed array:use for each
foreach($fruits as $matunda){
    echo $matunda. '<br>';
}
//for(initial value;text value;increment value){
// code to be executed
//}

for ($x = 0; $x < count($fruits);$x++){
//    echo out each item by accessing them using index numbers
    echo $fruits[$x].'<br>';
}
$num_fruits = count($fruits);//stores the number of items in the fruits array
for ($x = 0; $x < $num_fruits ;$x++){
//    echo out each item by accessing them using index numbers
    echo $fruits[$x].'<br><br>';
}

//Associative array 1:-populating directly
$geeks_fruits = array ("Craig"=>"Mango", "Steve"=>"Apple", "Victor"=>"Mapera", "Masoud"=>"grapes");

$geeks_teams = array ("Man_Utd"=>"Red", "Man_City"=>"Blue", "Wolves"=>"Yellow", "Real_Madrid"=>"White");

//Associative array 2:-populating one by one\
$country_car_brand['Kenya'] = 'Nyayo';
$country_car_brand['Germany'] = array('Benz','BMW','VW');
$country_car_brand['USA'] = 'Ford';
$country_car_brand['Japan'] = array ('Mitsubishi','Toyota');
$country_car_brand['China'] = 'Hyundai';

//Accessing associative array items:Use the keys

foreach ($country_car_brand ['Germany'] as $car){
    echo $car.'<br>';
}
$car_count = count ($country_car_brand ['Germany']);//number of cars
$cars_found_germany = $country_car_brand ['Germany'];//actual indexed array in germany key
for($i = 0; $i < $car_count; $i++)
    echo $cars_found_germany[$i].'<br>';


