<!DOCTYPE html>
<html lang="en">
<head>
  <title>final1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="">

div.well{
  height: 250px;
} 

.Absolute-Center {
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;

	border: 1px solid black;
	border-radius: 5px;  
}

.Absolute-Center.is-Responsive {
  width: 50%; 
  height: 50%;
  min-width: 200px;
  max-width: 400px;
  padding: 40px;  
}

#logo-container{
  margin: auto;
  margin-bottom: 10px;
  width:200px;
  height:30px;
}
  </style>
</head>
<body>
<div class="container">
  <div class="row" style="overflow:hidden;">
    <div class="Absolute-Center is-Responsive">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
      	<div class="center">
      		<h1>MY&nbsp;CART</h1>
      	</div>
        <form action="./logdb.php" id="loginForm" method="POST" style="margin-top:50px;width:250px;height:100px;">
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control" type="text" name='gmail' placeholder="gmail is username"/>          
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control" type="password" name='password' placeholder="password"/>     
          </div>
          <div class="form-group">
            <input type="Submit" class="btn btn-primary btn-block"/>
          </div>
          <div class="from-group text-center">
          	<a href="form2.html">Register</a>
          </div>
        </form>        
      </div>  
    </div>    
  </div>
</div>
</body>
</html>