<?php
//In development, we often need to store data collected from users of our systems
//MySQL is the database system used for booth big and small businesses and it
//uses the SQL (structured query language) to interact with data
//A DB is made up of related tables
//
//before using the database you have to connect to it by providing the following info
//    1.Hostname
//    2.username
//    3.password
//    4.database name
//
//PHP has helper functions that will make database interactions easy

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
}

//**Create a Database
//$sql = "CREATE DATABASE demo1";//request/query to the database system
//
////make the request/execute:mysqli_query:return boolean
//if (mysqli_query($connection,$sql)){
//    echo "Database created successfully <br>";
//}else{
//    echo "ERROR: could not execute $sql".mysqli_error($connection);
//}
//

//Inserting data into the table
$sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL ,'Kylaadam','Steve','Maina','astonadam79@gmail.com','deadpool','Male')";
if (mysqli_query($connection,$sql)){
    echo "Data inserted successfully <br>";
}else{
    echo "Data not insered".mysqli_error($connection);
}



?>










