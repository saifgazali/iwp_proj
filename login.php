<?php
  require_once('connect.php');
  if(isset($_POST) & !empty($_POST))
  {
    $regno = $_POST['regno'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password'";
  }
?>




<html>
<head>
	<title>User Registration</title>
	<!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
   <form class="form-signin" method="POST">
     <h2>Please Register</h2>
      <div class="input-group">
       <span class="input-group-addon" id="basic-addon1">0</span>
       <input type="text" name="regno" class="form-control" placeholder="regno" required>
      </div>
     
       <input type="text" name="username" class="form-control" placeholder="username" required>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required >
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <a class="btn btn-lg btn-primary btn-block" href="login.php">Register</a>
   </form>
 </div>

</body>
</html>