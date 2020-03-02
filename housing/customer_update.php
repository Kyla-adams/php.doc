<?php
require 'config.php';
require 'header.php';
if(isset($_POST['cust_btn'])){
//    if button is clicked
    //    grab id first
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        // grab form data

        $first_name =$_POST['firstname'];
        $last_name =$_POST['lastname'];
        $email =$_POST['email'];
        $phone =$_POST['phone'];
        $password =$_POST['password'];

        $sql = "UPDATE `customers` SET `firstname`='$first_name',`lastname`='$last_name',`email`='$email',`phone`='$phone',`password`='$password' WHERE id=$id";
//        execute update condition
        if(mysqli_query($connection,$sql)){
            header("location:account_customer.php?id='$id'");
            exit();
        }else{
            echo "ERROR".mysqli_error($connection);
        }
    }



}


?>
<?php
require 'footer.php'
?>
