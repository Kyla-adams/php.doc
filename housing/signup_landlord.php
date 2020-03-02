<?php
require 'config.php';
require 'header.php';

$first_name=$last_name=$phone=$email=$password='';
$first_name_err=$last_name_err=$phone_err=$email_err=$password_err='';
//process data
if(isset($_POST['btn_signup_customer'])){
//    grab data from the form
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

//   check if user exist
    $sql ="SELECT * FROM `landlords` WHERE email= '$email'";
    $results =mysqli_query($connection,$sql);
    if(mysqli_num_rows($results) > 0){
//        user exists
        header("location:login2.php");
        exit();
    }
//    hash user password
    $password = md5($password);
//    add user to db and take user to login page
    $sql ="INSERT INTO `landlords`(`id`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL,'$first_name','$last_name','$email','$password')";
    if(mysqli_query($connection,$sql)){
//       if user has been added successfully
        header("location:login2.php");
        exit();
    }else{
        echo "ERROR: ".mysqli_error($connection);
    }
}




?>
<!--start sign up form-->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div id="auth-form">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>

                        <div class="form-group">
                            <label for="">Firstname</label>
                            <input type="text" name="firstname" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Lastname</label>
                            <input type="text" name="lastname" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="number" name="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="btn_signup_customer">Signup</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
    </div>
</div>







<!--end sign up form-->


<?php
require 'footer.php';
?>

