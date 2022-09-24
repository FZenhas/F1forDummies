<?php
session_start();
if(empty($_SESSION['id']) || empty($_POST['form-username']) || /*empty($_POST['form-password']) ||*/ empty($_POST['form-email'])){
    header('Location: ../index.php?p=minhaconta&r=empty');
    exit();
}
$id = $_SESSION['id'];

if(!empty($_POST['form-password']))
    $password = $_POST['form-password'];

$username = $_POST['form-username'];
$name = $_POST['form-name'];
$email = $_POST['form-email'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

if(!empty($_POST['form-password']))
    $sql = "UPDATE `users` SET username='$username', password=MD5('$password'), email='$email' WHERE id=$id";
else
    $sql = "UPDATE `users` SET username='$username', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $_SESSION['username']=$username;
    header('Location: ../index.php?p=minhaconta&r=editok');
}
else
    header('Location: ../index.php?p=minhaconta&r=editerror');
$conn->close();
?>