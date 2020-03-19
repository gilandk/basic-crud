<?php
require_once('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon">

  <title>Registration Form</title>

  <!-- Bootstrap core CSS -->
  <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../dist/css/dashboard.css" rel="stylesheet">
  <link href="../dist/css/signin.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">CRUD</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php">User</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container col-md-12 text-center">


        <form method="POST" action="adminlogin.php" class="form-signin">
          <h2 class="form-signin-heading">Sign In</h2><br>

          <h5><strong>Username</strong></h5>
          <input type="text" id="user" name="user" class="form-control" placeholder="Username" required>
          <h5><strong>Password</strong></h5>
          <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>

          <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit" value="submit" name="submit">Sign in</button>
        </form>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>

</html>