<?php
require_once('config.php');
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

    <title>CRUD</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/dashboard.css" rel="stylesheet">
    <link href="dist/css/signin.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">CRUD</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="admin/index.php">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container col-md-12" style="padding-left:300px;">

        <div class="col-md-4 text-center">
            <div class="pull-right" style="margin-right:100px;">

                <form method="POST" action="signin.php" class="form-signin">
                    <h2 class="form-signin-heading">Sign In</h2><br>

                    <h5><strong>Username</strong></h5>
                    <input type="text" id="user" name="user" class="form-control" placeholder="Username" required>
                    <h5><strong>Password</strong></h5>
                    <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>

                    <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit" value="submit" name="submit">Sign in</button>
                </form>

            </div>
        </div>

        <div class="col-md-8" style="padding-left:100px;">
            <div class="pull-left" style="margin-left:100px;">


                <form method="POST" action="register.php" class="form-signin">

                    <h2 class="form-signin-heading">Registration Form</h2><br>
                    <div class="col-md-4 text-center">
                        <div class="pull-right" style="margin-left:100px;width:300px;">


                            <h5><strong><em>Username</em></strong></h5>
                            <input type="text" id="user" name="user" class="form-control" placeholder="Username" required>

                            <h5><strong><em>Password</em></strong></h5>
                            <input type="password" id="pass" name="pass" minlength="4"  class="form-control" placeholder="Password" required>

                            <h5><strong><em>First name</em></strong></h5>
                            <input type="text" id="fname" name="fname" class="form-control" placeholder="Firstname" required>

                            <h5><strong><em>Middle Name</em></strong></h5>
                            <input type="text" id="midname" name="midname" class="form-control" placeholder="Middle Initial" required>

                            <h5><strong><em>Last name</em></strong></h5>
                            <input type="text" id="lname" name="lname" class="form-control" placeholder="Lastname" required>

                            <h5><strong><em>Email</em></strong></h5>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required>

                            <h5><strong><em>Contact #</em></strong></h5>
                            <input type="text" id="contact" minlength="11" maxlength="11" name="contact" class="form-control" placeholder="Contact number" required>

                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="pull-left" style="margin-right:100px;width:300px;">

                            <h5><strong><em>House #</em></strong></h5>
                            <input type="text" id="hNO" name="hNO" class="form-control" placeholder="House no" required>

                            <h5><strong><em>St #./Subd/Zone</em></strong></h5>
                            <input type="text" id="stNO" name="stNO" class="form-control" placeholder="Street No./Subd/Zone" required>

                            <h5><strong><em>Baraggay</em></strong></h5>
                            <input type="text" id="brgy" name="brgy" class="form-control" placeholder="Baraggay" required>

                            <h5><strong><em>Municipality</em></strong></h5>
                            <input type="text" id="municipality" name="municipality" class="form-control" placeholder="Municipality" required>

                            <h5><strong><em>Province</em></strong></h5>
                            <input type="text" id="province" name="province" class="form-control" placeholder="Province" required>

                            <h5><strong><em>Registration Date</em></strong></h5>
                            <input type="text" id="regDate" class="form-control" value="<?php echo date("F-d-Y"); ?>" readonly>

                            <br />

                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Register</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>