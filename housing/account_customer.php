<?php
require 'header.php';
require 'config.php';
?>
<h1>
    Customers account
</h1>
<?php
$house_id=$email=$size=$location=$property=$price='';
if(isset($_GET['house_id'])){
    $house_id = $_GET['house_id'];

    $sql = "SELECT * FROM `houses` WHERE house_id=$house_id";

    $user = mysqli_query($connection, $sql);

//loop through data from db
    while($row = mysqli_fetch_array($user)){
        $email = $row['email'];
        $size = $row['size'];
        $location = $row['location'];
        $property = $row['property'];
        $price = $row['price'];
    }

}else{
    echo mysqli_error($connection);
}

?><!--section-b-->
<div class="center" id="section-b">
    <div class="row">
        <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <p>Welcome to our upgraded digital platform where you can find house rentals easily!!
            </p>
        </div>
    </div>
</div>
<br><br>
<!--section-c-->
<h1 class="nike">Houses for Rent</h1>
<div class="row container-fluid">
    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
            <img src="static/images/house10.jpg" alt="" style="height:150px;">
            <p class="price">Ksh.50000
            </p>
            <p class="bg-light"><button><a href="found.php">Rent House</a></button></p>
        </div>
    </div>
    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
            <img src="static/images/house11.jpg" alt="" style="height: 150px;">
            <p class="price">Ksh.87000
            </p>
            <p class="bg-light"><button><a href="found.php">Rent House</a></button></p>
        </div>
    </div>
    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
            <img src="static/images/house12.jpg" alt="" style="height: 150px;">
            <p class="price">Ksh.94000
            </p>
            <p class="bg-light"><button><a href="found.php">Rent House</a></button></p>
        </div>
    </div>
    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
            <img src="static/images/house9.jpg" alt="" style="height: 150px;">
            <p class="price">Ksh.120000
            </p>
            <p class="bg-light"><button><a href="found.php">Rent House</a></button></p>
        </div>
    </div>
</div>
<br>
<br>
<div class="row container-fluid">
    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
            <img src="static/images/h5.jpg" alt="" style="height:150px;">
            <p class="price">Ksh.109000
            </p>
            <p class="bg-light"><button><a href="found.php">Rent House</a></button></p>
        </div>
    </div>
    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
            <img src="static/images/h4.jpg" alt="" style="height: 150px;">
            <p class="price">Ksh.100000
            </p>
            <p class="bg-light"><button><a href="found.php">Rent House</a></button></p>
        </div>
    </div>
    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
            <img src="static/images/h3.jpg" alt="" style="height: 150px;">
            <p class="price">Ksh.80000
            </p>
            <p class="bg-light"><button><a href="found.php">Rent House</a></button></p>
        </div>
    </div>
    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
            <img src="static/images/h2.jpg" alt="" style="height: 150px;">
            <p class="price">Ksh.60000
            </p>
            <p class="bg-light"><button><a href="found.php">Rent House</a></button></p>
        </div>
    </div>
</div>
<br>
<br>

<!--section-d-->
<div class="row container-fluid">
    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
            <img src="static/images/house6.jpeg" alt="" style="height: 150px;">
            <p class="price">Ksh.75000
            </p>
            <p class="bg-light"><button><a href="found.php">Rent House</a></button></p>
        </div>
    </div>
    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
            <img src="static/images/house3.jpg" alt="" style="height: 150px;">
            <p class="price">Ksh.65000
            </p>
            <p class="bg-light"><button><a href="found.php">Rent House</a></button></p>
        </div>
    </div>
    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
            <img src="static/images/house2.jpg" alt="" style="height: 150px;">
            <p class="price">Ksh.90000
            </p>
            <p class="bg-light"><button><a href="found.php">Rent House</a></button></p>
        </div>
    </div>
    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
            <img src="static/images/house1.jpg" alt="" style="height: 150px;">
            <p class="price">Ksh.85000
            </p>
            <p class="bg-light"><button><a href="found.php">Rent House</a></button></p>
        </div>
    </div>
</div>
<br>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<a href="customer_details.php">View profile</a>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
require 'footer.php'
?>
