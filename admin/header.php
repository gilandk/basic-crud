<?php

//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
if (empty($_SESSION['id_user'])) {
    header("Location: index.php");
    exit();
}

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

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dist/css/dashboard.css" rel="stylesheet">
    <link href="../dist/css/signin.css" rel="stylesheet">

    <!-- jquery 3 for update table -->
    <script src='../dist/js/jquery-3.0.0.js' type='text/javascript'></script>
    <script src='../dist/js/script.js' type='text/javascript'></script>

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">CRUD - ADMIN ACCOUNT</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="">Welcome, (<?php echo $_SESSION['name']; ?>)</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="accounts.php">Manage Accounts</a></li>
                    <li><a href="pass.php">Change Admin Password</a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </div>