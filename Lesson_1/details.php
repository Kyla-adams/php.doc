<?php
//fetch user from db using the received id($user_id)
require 'header.php';
require 'config.php';
//grab id :use $_GET
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        //fetch data from db using id
$sql = "SELECT `id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender` FROM `users` WHERE id='$id'";
    echo $id;
    $user = mysqli_query($connection, $sql);

    //    create associative array to split data into column title and actual values;use msqli_fetch_assoc();
        $row = mysqli_fetch_assoc($user);

        echo "<div class='card'>";
            echo $row['username'].'<br>';
            echo $row['firstname'].'<br>';
            echo $row['lastname'].'<br>';
            echo $row['email'].'<br>';
            echo $row['password'].'<br>';
            echo $row['gender'].'<br>';
        echo "</div";
    }





require 'footer.php';
?>