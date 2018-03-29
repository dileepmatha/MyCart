<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
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
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
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
        <li class="active"><a href="final1.html">Home</a></li>
        <li><a href="mob1.php">Mobiles</a></li>
        <li><a href="lap1.php">Laptops</a></li>
        <li><a href="acc1.php">Accessories</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- jumbotron display -->
<div class="jumbotron">
  <div class="container text-center">
    <h1>My cart</h1>      
    <p>Mission, Vission and Values</p>
  </div>
</div>
<!-- carosuel display -->
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#" data-slide-to="0" class="active"></li>
      <li data-target="#" data-slide-to="1"></li>
      <li data-target="#" data-slide-to="2"></li>
      <li data-target="#" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://placehold.it/400x300?text=IMAGE" alt="" width="500" height="300">
      </div>

      <div class="item">
        <img src="https://placehold.it/400x300?text=IMAGE" alt="laptop" width="500" height="300">
      </div>
    
      <div class="item">
        <img src="https://placehold.it/400x300?text=IMAGE" alt="accessories" width="500" height="300">
      </div>

      <div class="item">
        <img src="https://placehold.it/400x300?text=IMAGE" alt="accessiores" width="500" height="300">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- product cards -->
<div class="container-fluid text-center bg-grey" style="margin-top:50px;">
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="https://placehold.it/400x300?text=IMAGE" alt="Mobile" >
        <a href="mob1.php"><strong>mobile</strong></a>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="https://placehold.it/400x300?text=IMAGE" alt="Laptop" >
         <a href="lap1.php"><strong>Laptop</strong></a>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="https://placehold.it/400x300?text=IMAGE" alt="Accessories" >
         <a href="acc1.php"><strong>Accessories</strong></a>
      </div>
    </div>
  </div>
</div>
<footer>
	<div class="container-fluid text-center bg-grey">
		<h2>online store copyrights</h2>
		<div class="row">
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