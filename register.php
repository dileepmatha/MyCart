<!DOCTYPE html>
<html lang="en">
<head>
  <title>registerform</title>
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
        <form action="./regdb.php" id="loginForm" method="POST">
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control" type="text" name='name' placeholder="name"/>          
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-mail"></i></span>
            <input class="form-control" type="mail" name='gmail' placeholder="gmail"/>     
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-num"></i></span>
            <input class="form-control" type="phone number" name='number' placeholder="phone number"/>     
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control" type="password" name='password' placeholder="password"/>     
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control" type="password" name='password' placeholder="re=enter password"/>     
          </div>
          <div>
            <textarea rows="5" cols="30" placeholder="Enter Address....." name="address"></textarea>
          </div>
          <div class="form-group">
            <input type="Submit" class="btn btn-primary btn-block">
          </div>
          </div>
        </form>        
      </div>  
    </div>    
  </div>
</div>
</body>
</html>