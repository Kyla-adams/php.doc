<?php
//PHP data types
//Variables can store diff types of data, that do different things
//PHP supports the following data types

//1. String
//A sequence of characters in double or single Quotes
//eg "hello world" , 'hello world'
//**Rules that govern names for variables
    //A variable starts with the $ sign, followed by the name of the variable
    //A variable name must start with a letter or the underscore character
    //A variable name cannot start with a number
    //A variable name can only contain alpha-numeric characters and underscores (a-z, 0-9)
    //Variable names are case-sensitive ($age & $AGE are two different variables)

$x = "PHP";
$y = "Kotlin";
$Y = "Android";
var_dump($x);
var_dump($y);
var_dump($Y);
echo "<br>";

//*What if you want to know how may characters makes up a string?
// Use: strlen() function
//function: code that helps you do repetitive tasks

echo strlen($Y);
echo "<br>";
echo strlen("Kyla adams");
echo "<br>";

//count number of words in a string: str_word_count() function

echo str_word_count('I love coding in php');
echo "<br>";
$num_words = str_word_count("Coding is awesome");
echo $num_words;
echo "<br>";

//Search for a text Within a string: strpos()
$position_for_world = strpos("Hello world", "world");
echo $position_for_world;
echo "<br>";

//Replace text within a string:use str_replace()
echo str_replace("world", "Dunia", "Hello world");
echo "<br>";


//2. Integers
//Numbers that are non decimal
//must at least have one digit
$age = 21;
var_dump($age);
echo "<br>";

//3. Float
//is a number with a decimal point
$cup_volume = 23.45;
var_dump($cup_volume);
echo "<br>";

//4. Boolean
//Values are true or false
//oftenly used in conditional statements
$a = true;
$b = false;
echo "<br>";
echo 3>5;
echo "<br>";
echo 3<5;

//echo 3<5 true returns 1
//echo 3>5 false returns nothing, it means 0

//5. Arrays
//6. objects
//7. NULL
//8. Resources
