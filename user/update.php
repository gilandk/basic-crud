<?php

session_start();

//If user Not logged in then redirect them back to homepage. 
if (empty($_SESSION['id_user'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$field = $_POST['field'];
$value = $_POST['value'];
$editid = $_POST['id'];

$query = "UPDATE users SET " . $field . "='" . $value . "' WHERE userid=" . $editid;
$result = $conn->query($query);
