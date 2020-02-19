<?php
require 'header.php';
require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    //fetch data from db using id
    $sql = "SELECT `id`, `product`, `price`, `description`, `conditions` FROM `products` WHERE id='$id'";
    echo $id;
    $products = mysqli_query($connection, $sql);

    //    create associative array to split data into column title and actual values;use msqli_fetch_assoc();
    $row = mysqli_fetch_assoc($products);

    echo "<div class='card'>";
    echo $row['product'].'<br>';
    echo $row['price'].'<br>';
    echo $row['description'].'<br>';
    echo $row['conditions'].'<br>';
    echo "</div";
}

require 'footer.php';
?>