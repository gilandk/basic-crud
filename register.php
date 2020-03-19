<?php

require_once('config.php');

if (isset($_POST)) {

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $midname = mysqli_real_escape_string($conn, $_POST['midname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $hNO = mysqli_real_escape_string($conn, $_POST['hNO']);
    $stNO = mysqli_real_escape_string($conn, $_POST['stNO']);
    $brgy = mysqli_real_escape_string($conn, $_POST['brgy']);
    $municipality = mysqli_real_escape_string($conn, $_POST['municipality']);
    $province = mysqli_real_escape_string($conn, $_POST['province']);

    $regDate = date("F-d-Y");

    $q = "SELECT * FROM users";
    $r = $conn->query($q);
    $count = $r->num_rows;

    $regNo = date('mdY'). '-' . $count;


    $query = "SELECT user, email FROM users WHERE user='$user' OR email='$email'";
    $res = $conn->query($query);

    if ($res->num_rows == 0) {

        $sql = "INSERT INTO users (fname, midname, lname, user, pass, email, contact, hNO, stNO, brgy, municipality, province, regDate, regNo) VALUES ('$fname', '$midname', '$lname', '$user', '$pass', '$email', '$contact', '$hNO', '$stNO', '$brgy', '$municipality', '$province', '$regDate', '$regNo') ";
        $result = $conn->query($sql);

        if ($result === TRUE) {
            $msg = "Success You may now login your account";
            echo "<script type='text/javascript'>
        alert('$msg');
        window.location.href='index.php';
        </script>";
        } else {

            $msg = "FAILED! TRY AGAIN";
            echo "<script type='text/javascript'>
        alert('$msg');
        window.location.href='index.php';
        </script>";
        }
    } else {

        $msg = "Username/Email already exist";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location.href='index.php';
        </script>";
    }
}
