<?php
if(empty($_POST['form-username']) || empty($_POST['form-email']) || empty($_POST['form-password1']) || empty($_POST['form-password2'])){
    header('Location: ../index.php?p=registo&r=empty');
    exit();
}
$username = $_POST['form-username'];
$email = $_POST['form-email'];
$password1 = $_POST['form-password1'];
$password2 = $_POST['form-password2'];

if($password1!=$password2){
    header('Location: ../index.php?p=registo&r=pwderror');
    exit();
}
// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

$sql = "INSERT INTO `users` (username, email, password, user_type_id) VALUES ('$username', '$email', MD5('$password1'),2)";

if($conn->query($sql) === TRUE)
    header('Location: ../index.php?p=login&r=registook');
else
    header('Location: ../index.php?p=registo&r=regerror');
$conn->close();
?>