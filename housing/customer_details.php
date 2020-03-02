<?php
require "config.php";
require "header.php";
?>
<?php
$id=$first_name=$last_name=$email=$phone=$password='';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT `user_id`, `firstname`, `lastname`, `email`, `phone`, `password` FROM `customers` WHERE id='$id'";

    $user = mysqli_query($connection, $sql);

//loop through data from db
    while($row = mysqli_fetch_array($user)){
        $first_name = $row['firstname'];
        $last_name = $row['lastname'];
        $email = $row['email'];
        $phone = $row['phone'];
        $password = $row['password'];
    }
}
if(isset($_POST['cust_btn']) and isset($_GET['id'])){
    $id = $_GET['id'];
    echo "$id";

    if(isset($_POST['firstname'])){
        $first_name = $_POST['firstname'];
    }
    if(isset($_POST['lastname'])){
        $last_name = $_POST['lastname'];
    }
    if(isset($_POST['email'])){
        $email= $_POST['email'];
    }
    if(isset($_POST['phone'])){
        $phone= $_POST['phone'];
    }
    if(isset($_POST['password'])){
        $password= $_POST['password'];
    }
}else{
    echo mysqli_error($connection);
}

?>
<div class="container">
    <div class="jumbotron">
        <h2 class="content-title"><?php echo "Welcome to <span style='color: blue;font-weight: bold'>$first_name</span> page"?></h2>
    </div>
    <div class="row">
        <div class="col-md-2 col-lg-2 col-xl-2"></div>
        <div class="col-md-8 col-lg-8 col-xl-8">
            <div class="card">
                <form action="customer_update.php" method="post" enctype="multipart/form-data">
                    <fieldset>

                        <div class="form-group">
                            <label for="">Firstname</label>
                            <input type="text" class="form-control" name="firstname" value="<?php echo $first_name?>">
                            <input type="number" hidden name="id" value="<?php echo $id?>">
                        </div>

                        <div class="form-group">
                            <label for="">Lastname</label>
                            <input type="text" class="form-control" name="lastname" value="<?php echo $last_name?>">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email"  value="<?php echo $email?>">
                        </div>

                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="number" class="form-control" name="phone"  value="<?php echo $phone?>">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $password?>">
                        </div>
                        <button type="submit" class="btn btn-dark" name="cust_btn">Update Profile</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2"></div>
    </div>
</div>