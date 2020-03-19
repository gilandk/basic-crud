<?php


session_start();

//If user Not logged in then redirect them back to homepage. 
if (empty($_SESSION['id_user'])) {
    header("Location: index.php");
    exit();
}

require_once('../config.php');

if (isset($_POST['changepass'])) {

    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $cfpass = mysqli_real_escape_string($conn, $_POST['cfpass']);

    if ($pass == $cfpass) {


        $sql = "UPDATE admin SET pass='$pass' WHERE adminID='$_SESSION[id_user]' ";
        $result = $conn->query($sql);

        $msg = "Sucessfully Changed";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location.href='pass.php';
        </script>";
    } else {
        $msg = "Password does not match";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location.href='pass.php';
        </script>";
    }
}
