<?php
  require_once('connect.php');
  if(isset($_POST)& !empty($_POST))
{
  $regno=mysqli_real_escape_string($connection,$_POST['regno']);
 $username = mysqli_real_escape_string($connection,$_POST['username']);
$email = mysqli_real_escape_string($connection,$_POST['email']);
$password = md5($_POST['password']);
$sql = "INSERT INTO `login` (regno,username,email,password) VALUES ('$regno','$username','$email','$password')";
  $result = mysqli_query($connection,$sql);
  if($result){
    echo "User Registration succesful";
  }
  else{
    echo "User Registration Failed";
  }
}

?>
<!DOCTYPE html>
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
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required >
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
   </form>
 </div>

</body>
</html>