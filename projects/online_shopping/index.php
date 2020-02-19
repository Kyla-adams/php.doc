<?php
require 'header.php';
require 'config.php';


echo '<h1>Purchases</h1>';
//query for selecting all records from table users
$sql = "SELECT * FROM `products`";

//store data in variable called products
$products = mysqli_query($connection,$sql);

//loop through data from db
while($row = mysqli_fetch_array($products)){
    echo "<div class='card'>";
    $product_id = $row['id'];
    echo "<a href='details.php?id=$product_id'>";
    echo $row ['product'];
    echo $row ['price'];
    echo $row ['description'];
    echo $row ['conditions'];
    echo "</a>";
    echo '<br>';
    echo "<a href='delete.php?id=$product_id'>Delete</a>";
    echo "</div>";
    echo "<br>";
}

require 'footer.php';
?>























