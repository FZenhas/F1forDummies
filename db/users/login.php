<?php
if(empty($_POST['form-username']) || empty($_POST['form-password'])){
    header('Location: ../../index.php?p=login&r=empty');
    exit();
}
$username = $_POST['form-username'];
$password = $_POST['form-password'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('../conn.php');

$sql = "SELECT * FROM `users` WHERE username='$username' AND password=MD5('$password') AND visibility=1";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();


    /* --- LOGIN OK, SESSION --- */
    session_start();
    $_SESSION['id']=$row['id'];
    $_SESSION['username']=$row['username'];
    $_SESSION['type']=$row['user_type_id'];
    $_SESSION['data']=$row['photo'];

    header('Location: ../../index.php?p=home');
} else {
    header('Location: ../../index.php?p=login&r=loginerrado');
}
$conn->close();
