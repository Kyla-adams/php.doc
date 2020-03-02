<?php
require 'config.php';
require 'header.php';

$email=$size=$location=$property=$price='';
$email_err=$size_err=$location_err=$property_err=$price_err='';
//process data
if(isset($_POST['btn_rent'])){
//    grab data from the form
    $email = $_POST['email'];
    $size = $_POST['size'];
    $location = $_POST['location'];
    $property = $_POST['property'];
    $price = $_POST['price'];

//    add data to db and take landlord to account page
    $sql ="INSERT INTO `houses`(`house_id`, `email`, `size`, `location`, `property`, `price`) VALUES (NULL ,'$email','$size','$location','$property','$price')";
    if(mysqli_query($connection,$sql)){
//       if user has been added successfully
        header("location:account_landlord.php");
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
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                            <?php
                            if(isset($email)!=$email){
                                echo "";
                            }
                            ?>
                        </div>

                        <div class="form-group">
                            <label for="">Size</label>
                            <select name="size" id="sizing">
                                <option value="size">1 Bed</option>
                                <option value="size">2 Beds</option>
                                <option value="size">3 Beds</option>
                                <option value="size">4 Beds</option>
                                <option value="size">5 Beds</option>
                                <option value="size">6 Beds</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Location</label>
                            <input id="search" class="select" style="font-size:13px;color:#000;" size="50" name="location" placeholder="Location" />
                        </div>

                        <div class="form-group select">
                            <label for="">Property type</label>
                            <select name="property" id="propertytype" onchange="validate()">
                                <option value="1">Apartment</option>
                                <option value="17">House</option>
                                <option value="11">Land</option>
                            </select>
                        </div>

                        <div class="select">
                            <select name="price">
                                <option value="">Price</option>
                                <option value="5000">5,000</option>
                                <option value="10000">10,000</option>
                                <option value="20000">20,000</option>
                                <option value="30000">30,000</option>
                                <option value="40000">40,000</option>
                                <option value="50000">50,000</option>
                                <option value="100000">100,000</option>
                                <option value="250000">250,000</option>
                                <option value="500000">500,000</option>
                                <option value="1000000">1M</option>
                                <option value="2500000">2.5M</option>
                                <option value="5000000">5M</option>
                                <option value="7500000">7.5M</option>
                                <option value="10000000">10M</option>
                                <option value="12500000">12.5M</option>
                                <option value="15000000">15M</option>
                                <option value="17500000">17.5M</option>
                                <option value="20000000">20M</option>
                                <option value="22500000">22.5M</option>
                                <option value="25000000">25M</option>
                                <option value="27500000">27.5M</option>
                                <option value="30000000">30M</option>
                                <option value="32500000">32.5M</option>
                                <option value="35000000">35M</option>
                                <option value="37500000">37.5M</option>
                                <option value="40000000">40M</option>
                                <option value="42500000">42.5M</option>
                                <option value="45000000">45M</option>
                                <option value="47500000">47.5M</option>
                                <option value="50000000">50M</option>
                                <option value="52500000">52.5M</option>
                                <option value="55000000">55M</option>
                                <option value="57500000">57.5M</option>
                                <option value="60000000">60M</option>
                                <option value="62500000">62.5M</option>
                                <option value="65000000">65M</option>
                                <option value="67500000">67.5M</option>
                                <option value="70000000">70M</option>
                                <option value="72500000">72.5M</option>
                                <option value="75000000">75M</option>
                                <option value="77500000">77.5M</option>
                                <option value="80000000">80M</option>
                                <option value="82500000">82.5M</option>
                                <option value="85000000">85M</option>
                                <option value="87500000">87.5M</option>
                                <option value="90000000">90M</option>
                                <option value="92500000">92.5M</option>
                                <option value="95000000">95M</option>
                                <option value="97500000">97.5M</option>
                                <option value="100000000">100M</option>
                                <option value="100000001">100M +</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="btn_rent">Rent</button>
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
