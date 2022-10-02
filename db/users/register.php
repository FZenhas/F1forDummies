<?php
if(empty($_POST['form-username']) || empty($_POST['form-email']) || empty($_POST['form-password1']) || empty($_POST['form-password2'])){
    header('Location: ../index.php?p=register&r=empty');
    exit();
}
$username = $_POST['form-username'];
$email = $_POST['form-email'];
$password1 = $_POST['form-password1'];
$password2 = $_POST['form-password2'];

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password1);
$lowercase = preg_match('@[a-z]@', $password1);
$number    = preg_match('@[0-9]@', $password1);

if(!$uppercase || !$lowercase || !$number || strlen($password1) < 8) {
    header('Location: ../../index.php?p=register&r=pwdnotworking');
    exit();
}

if($password1!=$password2){
    header('Location: ../../index.php?p=register&r=pwderror');
    exit();
}
if($password1 < 8)
// In the base page (directly accessed):
define('_DEFVAR', 1);
include('../conn.php');

$sql = "INSERT INTO `users` (username, email, password, user_type_id) VALUES ('$username', '$email', MD5('$password1'),2)";

if($conn->query($sql) === TRUE)
    header('Location: ../../index.php?p=login&r=registerok');
else
    header('Location: ../../index.php?p=register&r=regerror');
$conn->close();
?>