<?php
require 'config.php';
//1.  create variables that will store received data
$product = $price = $description = $conditions = '';
//2. create variables that will store error messages
$product_err = $price_err = $description_err = $conditions_err = '';


//3.1 check the request method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//3.2 clean the data
      $product = safisha($_POST['product']);
      $price = safisha($_POST['price']);
      $description = safisha($_POST['description']);
      $conditions = safisha($_POST['condition']);

    //Inserting data into the table
    if (empty($product)) {
        $product_err = "Name your product";
    }
    if (empty($price)) {
        $price_err = "Select a price";
    }
    if (empty($description)) {
        $description_err = "Give a description";
    }
    if (empty($conditions)) {
        $conditions_err = "What condition is it in";
    }
    $sql = "INSERT INTO `products`(`id`, `product`, `price`, `description`, `conditions`) VALUES (NULL,'$product','$price','$description','$conditions')";
    if (mysqli_query($connection,$sql )) {
        echo "Data inserted successfully <br>";
    }else{
        echo "Data not inserted".mysqli_error($connection);
    }

}


function safisha($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


 ?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
<fieldset>
    <h2>Purchase form...</h2>
    <label for="">Product</label><br>
    <input type="text" name="product">
    <span class="error" style="color: orangered"><?php echo $product_err?></span><br>

    <label for="">Price</label><br>
    <input type="number" name="price">
    <span class="error" style="color: orangered"><?php echo $price_err?></span><br>

    <label for="">Description</label><br>
    <input type="text" name="description">
    <span class="error" style="color: orangered"><?php echo $description_err?></span><br><br>

    <label for="">Conditions<br>
        <input type="radio" name="condition" value="Good">Good
        <input type="radio" name="condition" value="Fair">Fair
        <input type="radio" name="condition" value="Poor">Poor<br><br>
        <span class="error" style="color: orangered"><?php echo $conditions_err?></span><br>
    </label><br><br>
    <a href="index.php" type="submit" class="btn-outline-success">Submit</a>

</fieldset>
</form>

















