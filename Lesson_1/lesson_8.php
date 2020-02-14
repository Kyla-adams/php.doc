<?php
//Some predefined variables in PHP are "superglobals", which means that
//they are always accessible, regardless of scope - and you can access them
//from any function, class or file without having to do anything special.
//The PHP superglobal variables are:
//
//$GLOBALS
//$_SERVER
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION


//   $GLOBALS
//Super global variables are built-in variables that are always available ina ll scopes.
//$GLOBALS is a php super global variable which is used to access global variables
//from anywhere in the PHP script (also from within functions or methods).
//PHP stores all global variables in an array called $GLOBALS{index}.
//The index holds the name of the variable

$GLOBALS['name'] = "John";
$x = 75;
$y = 25;
$GLOBALS['sum'] = $x + $y;


//   $_SERVER
//$_SERVER is a php super global variable which holds
// information about headers,paths, and script locations.

//to find file location use element'PHP_SELF' in $_SERVER
$phpfilepath = $_SERVER["PHP_SELF"];
echo "FILE LOCATION:".$phpfilepath. "<br>";

//get server name
$servername = $_SERVER['SERVER_NAME'];
echo "SERVER_NAME:".$servername."<br>";
//get request method
$request_method = $_SERVER['REQUEST_METHOD'];
echo "REQUEST_METHOD:".$request_method."<br>";


//$_REQUEST: we need a form form this
$get_name = $_REQUEST['jina'];
$get_email = $_REQUEST['email'];
echo "get_name <br>";
echo "get_email <br>";
echo "
<form action='lesson_8.php' method='post'>
    <label for=''>Username</label>
    <input type='text' name='jina'>
    <label for=''>email</label>
    <input type='email' name='email'>
    <button type='submit'>Send data</button>
</form>
    "

?>




































