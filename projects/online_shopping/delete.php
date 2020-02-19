<?php
require 'header.php';
require 'config.php';
require 'index.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM `products` WHERE id='$id'";

//    execute delete
    if(mysqli_query($connection, $sql)){
//        return user to index page
        header("location:products.php");

    }

}
require 'footer.php';
?>