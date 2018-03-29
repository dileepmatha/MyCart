<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accessories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .navbar {
      margin-bottom: 0px;
      border-radius: 0;
   }
  .jumbotron{
      margin-top: 0px;
   } 
    /* Add a gray background color and some padding to the footer */
  footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
      .thumbnail {
      padding: 0 0 15px 0;
      border: 1px solid black;
      border-radius: 3px;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
      border-radius: 3px;
  }
   </style>
</head>
<body>
<!-- mobile bootstrap -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="mob1.php">Mobiles</a></li>
        <li><a href="lap1.php">Laptops</a></li>
        <li class="active"><a href="acc1.php">Accessories</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--All Accessories products -->
<div class="container text-center bg-grey" style="margin-top:50px;">
<?php 
$connect = mysqli_connect('localhost','root','','mycart');
$query = "SELECT * FROM `accessories` WHERE 1";
$result =  mysqli_query($connect,$query);
while ($row=$result->fetch_assoc()) {
?>
  <div class="row text-center">
    <div class="col-sm-6">
      <div class="thumbnail">
        <img src=<?php echo "\"".$row['Path']."\""; 
        ?> alt="Mobile" >
        <p><?php echo $row['Name']."<br>".$row['Feature']."<p>$".$row['Price']."</p>"; 
        ?></p>
        <a href="#" class="btn btn-success"><strong>Buy</strong></a>
      </div>
    </div> <?php $row=$result->fetch_assoc();?>
    <div class="col-sm-6">
      <div class="thumbnail">
        <img src=<?php echo "\"".$row['Path']."\""; 
        ?> alt="Mobile" >
        <p><?php echo $row['Name']."<br>".$row['Feature']."<p>$".$row['Price']."</p>"; 
        ?></p>
        <a href="#" class="btn btn-success"><strong>Buy</strong></a>
      </div>
    </div>
  </div>
  <?php } ?>
</div>

<!-- footer -->
<footer>
  <div class="container-fluid text-center bg-grey">
  <strong>online  store  copyrights</strong>
    <div class="row" style="margin-top:10px;">
      <div class="col-lg-4">
        <strong>My cart</strong>
        <p></p>
        <p>CBIT,Hyd</p>
        <p>machilipatnam</p>
        <p>dileeppenumalli@gmail.com</p>
      </div>
      <div class="col-lg-4">
        <strong>Contact</strong>
        <p></p>
        <p>Dileep</p>
        <p>9490421430</p>
        <p>Cbit hostel</p>
      </div>
      <div class="col-lg-4">
        <strong>Works</strong>
        <p></p>
        <p>Amazon</p>
        <p>Flipkart</p>
        <p>Myntra</p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>