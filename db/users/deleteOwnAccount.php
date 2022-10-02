<?php
session_start();
if(empty($_SESSION['id'])){
    header('Location: ../index.php?p=account&r=empty');
    exit();
}
$id = $_SESSION['id'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('../conn.php');

$sql = "UPDATE `users` SET visibility = 0 WHERE id=$id";

if ($conn->query($sql) === TRUE)
    header('Location: ../../index.php?p=logout');
else
    header('Location: ../../index.php?p=account&r=deleteerror');
$conn->close();
?>

