<?php
require 'header.php';
require 'config.php';

//**Create a Database
$sql = "CREATE DATABASE demo1";//request/query to the database system
//
////make the request/execute:mysqli_query:return boolean
if (mysqli_query($connection,$sql)){
   echo "Database created successfully <br>";
}else{
   echo "ERROR: could not execute $sql".mysqli_error($connection);
}
//


//Complete PHP FORM
//algorithm
//1.  create variables that will store recieved data
$username = $first_name = $last_name = $email = $password1 = $password2 = $gender = '';
//2. create variables that will store error messages
$username_err = $first_name_err = $last_name_err = $email_err = $password1_err = $password2_err = $gender_err = '';
//3. Processing incoming data

    //3.1 check the request method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //3.2 clean the data
    $username = clean($_POST['username']);
    $first_name = clean($_POST['first_name']);
    $last_name = clean($_POST['last_name']);
    $email = clean($_POST['email']);
    $password1 = clean($_POST['password1']);
    $password2 = clean($_POST['password2']);
    $gender = clean($_POST['gender']);

    //3.3 check if data is empty
//if true assign error messages to respective error variables
    if (empty($username)) {
        $username_err = "Please fill in your username";
    }
    if (empty($first_name)) {
        $first_name_err = "Please fill in your first name";
    }
    if (empty($last_name)) {
        $last_name_err = "Please fill in your last name";
    }
    if (empty($email)) {
        $email_err = "Please fill in your email";
    }
    if (empty($password1)) {
        $password1_err = "Please fill in your password";
    }
    if (empty($password2)) {
        $password2 = "Please confirm password";
    }

    if (empty($gender)) {
        $gender_err = "Please select your gender";
        echo ' DETAILS';
    }
    // check of password1 and password2 are matching
    if ($password1 != $password2) {
        $password1_err = 'Your passwords do not match';
    } else {
        // encrypting a password
        $password1 = md5($password1);
        //Inserting data into the table
        $sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL ,'$username','$first_name','$last_name','$email','$password1','$gender')";
        if (mysqli_query($connection, $sql)) {
            echo "Data inserted successfully <br>";
        } else {
            echo "Data not inserted" . mysqli_error($connection);
        }

    }
}
//4. display the data: SOON store data in a database
function clean($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
<fieldset>
    <h3>Register here..</h3>
    <label for="">Username</label><br>
    <input type="text" name="username"><br>
    <span class="error" style="color: orangered"><?php echo $username_err?></span><br>

    <label for="">First_name</label><br>
    <input type="text" name="First name"><br>
    <span class="error" style="color: orangered"><?php echo $first_name_err?></span><br>

    <label for="">Last_name</label><br>
    <input type="text" name="Last name"><br>
    <span class="error" style="color: orangered"><?php echo $last_name_err?></span><br>

    <label for="">Email</label><br>
    <input type="email" name="email"><br>
    <span class="error" style="color: orangered"><?php echo $email_err?></span><br>

    <label for="">Password</label><br>
    <input type="password" name="pass1"><br>
    <span class="error" style="color: orangered"><?php echo $password1_err?></span><br>

    <label for="">Confirm</label><br>
    <input type="password" name="pass2"><br>
    <span class="error" style="color: orangered"><?php echo $password2_err?></span><br>

    Gender:
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="male">Female
    <input type="radio" name="gender" value="male">Other<br><br>
    <button type="submit" >Signup</button>

</fieldset>
</form>

<?php
require 'footer.php';
?>