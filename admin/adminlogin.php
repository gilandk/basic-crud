<?php
//To Handle Session Variables on This Page
session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("../config.php");

//If user Actually clicked login button 
if (isset($_POST)) {

    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * from admin WHERE user='$user' AND pass='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {

            $_SESSION['name'] = $rows['fname'];
            $_SESSION['id_user'] = $rows['adminID'];

            $msg = "SUCCESSFULLY LOGIN";
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location.href='accounts.php';
            </script>";
        }
        $conn->close();
    } else {

        $msg = "FAILED! TRY AGAIN";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location.href='index.php';
        </script>";
    }
}
