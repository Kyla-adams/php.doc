<?php
//**>CONNECTING TO THE DATABASE
//    credentials for connecting to the database
$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'demo1';

//To connect to a database use the php function called mysql_connect()
//mysqli::function returns a boolean datatype

$connection = mysqli_connect($hostname,$username,$password,$databasename);
//check connection
if ($connection == false){
    echo 'Connection not successful<br>';
//stop connection if unsuccessful
    die ('ERROR:'.mysqli_connect_error());
}else{
    echo 'You are in <br>';
}


?>