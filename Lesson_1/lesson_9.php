<?php
//PHP $_POST is a PHP super global variable which is used to collect form
//data after submitting an HTML form with method "post"
//$_POST is also widely used to pass variables.
//recieve form data using POST request/$_POST() superglobal
//recieve data
//declare variables to store sent data
$name = '';
$email = '';

//check the request method:GET or POST:use $_SERVER()
if($_SERVER['REQUEST_METHOD'] == 'POST'){
//    if method is post,grab data using the $_POST superglobal
    $name = $_POST['jina'];
    $email = $_POST['arafa'];
    $error = false;

if (empty($name)){
    $error = true;
    echo "<p style='color: crimson'>Please fill in your name</p>";
}
if (empty($email))
    $error = true;{
    echo "<p style='color: crimson'>Please fill in your email </p>";}
}
    else {
        $name = clean($name);
        $email = clean($email);
        echo '<p>Please fill in your email</p>';
    }
//  print the data
//if (!$error){
//    echo "<p style='color: crimson'>Your name is $name and email is $email</p><br>";
//
// }


//validating/cleaning data
//1. To remove unwanted space use: trim()
//2. To remove backslash use strpslashes()
//create a function to clean data

function clean($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

?>





<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"method="post">
    <h3>Fill form...</h3>
    <input type="text" name="jina" placeholder="Enter Name" required><br>
    <input type="text" name="arafa" placeholder="Enter email" required><br>
    <button type="submit">Send</button>
<!-- action: location that data will be sent to in server, value: lesson9.php
<!-- method: request method to be used to send data to the server-->
<!-- name: is the key for a value entered in the form:-->
<!-- this will result to an associative array of this format-->

<?php
//    $_POST = array("jina"=>"Adam","arafa"=>"astonadam79@gmail.com")
?>

</form>
<!--$_GET: Used to collect data from a form just like $_POST-->
<!--    collect data sent via the URL-->
<?php
//grabbing data sent via $_GET{}
$the_name = $_GET['name'];
$the_age = $_GET['age'];
$the_country = $_GET['country'];
echo "Your details: name : $the_name, age: $the_age, country: $the_country<br>"
?>
<a href="lesson_9.php?name=Dyla&age=23&country=Kenya">Send Details</a>