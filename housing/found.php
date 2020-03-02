<?php
require 'header.php';
require 'config.php';
$id=$first_name=$last_name=$email=$password='';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT `id`, `firstname`, `lastname`, `email`, `password` FROM `landlords` WHERE id='$id'";

    $user = mysqli_query($connection, $sql);

//loop through data from db
    while($row = mysqli_fetch_array($user)){
        $first_name = $row['firstname'];
        $last_name = $row['lastname'];
        $email = $row['email'];

    }
}else{
    echo mysqli_error($connection);
}
?>

 <div class="container">
     <div class="details">
         <p>Phone :<?php echo $email ?>0700420546</p>
     </div>
 </div>
<a href="account_customer.php">Back</a>
