<?php
require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM `users` WHERE id='$id'";

//    execute delete
    if(mysqli_query($connection, $sql)){
//        return user to index page
    header("location:index.php");

    }

}


?>