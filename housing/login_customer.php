<?php
require 'config.php';
require 'header.php';

$email=$password='';
$email_err=$password_err='';
//process data
if(isset($_POST['btn_login'])){
//    grab data from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
//  check if user has the right email
    $sql ="SELECT `user_id`, `firstname`, `lastname`, `email`, `phone`, `password` FROM `customers` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)){
//        user found
//        loop through user data from the table in db
        while($row= mysqli_fetch_assoc($result) > 0){
//            required is id and email

            session_start();
            $_SESSION['house'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['hao'] = true;
            header("location:house.php");
            exit();
        }

    }else{
//        password is wrong
        header("location:login2.php");
    }



}




?>
<!--start login form-->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div id="auth-form">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="btn_login">Login</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
    </div>
</div>







<!--end login form-->


<?php
require 'footer.php';
?>

