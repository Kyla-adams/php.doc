<?php
require 'header.php'
?>
<h2>This is the landlords account</h2>
    <p>here he/she can receive rents requests from customers </p>
<!--receive request from the customer wanting to rent-->
<?php
require 'config.php';
//$firstname=$lastname=$email=$phone=$password='';
//
//if(isset($_GET['id'])){
//    $id = $_GET['id'];
//
//    $sql="SELECT `id`, `firstname`, `lastname`, `email`, `password` FROM `landlords` WHERE id=$id";
//
//    $user = mysqli_query($connection, $sql);
//
////loop through data from db
//    while($row = mysqli_fetch_array($user)){
//        $first_name = $row['firstname'];
//        $last_name = $row['lastname'];
//        $email = $row['email'];
//        $phone = $row['phone'];
//        $password = $row['password'];
//    }
//}else{
//    echo mysqli_error($connection);
//}

?>
<table align="center" border="1px" style="width: 600px; line-height: 40px;">
    <tr>
        <th colspan="4"><h2>Houses Available</h2></th>
    </tr>
    <t>
        <th>house_id</th>
        <th>email</th>
        <th>size</th>
        <th>location</th>
        <th>property</th>
        <th>price</th>
    </t>
    <?php if(isset($_GET['house_id'])){
    $query="SELECT * FROM `houses`;";
    $result = mysqli_query($connection, $query);


       while ( $rows=mysqli_fetch_assoc($result)) {
           ?>
           <tr>
               <td><?php echo $rows . ['house_id']; ?></td>
               <td><?php echo $rows . ['email']; ?></td>
               <td><?php echo $rows . ['size']; ?></td>
               <td><?php echo $rows . ['location']; ?></td>
               <td><?php echo $rows . ['property']; ?></td>
               <td><?php echo $rows . ['price']; ?></td>
           </tr>
           <?php

       }
    }else{
        echo mysqli_error($connection);
    }
    ?>
</table>
<?php
require 'footer.php'
?>
