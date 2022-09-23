<?php
if(empty($_POST['form-username']) || empty($_POST['form-password1']) || empty($_POST['form-password2'])){
    header('Location: ../index.php?p=register&r=empty');
    exit();
}
$username = $_POST['form-username'];
$password1 = $_POST['form-password1'];
$password2 = $_POST['form-password2'];

if($password1!=$password2){
    header('Location: ../index.php?p=register&r=pwderror');
    exit();
}
// In the base page (directly accessed):
include('conn.php');

$sql = "INSERT INTO `user` (username,password,usertype_id) VALUES ('$username',MD5('$password1'),2)";

if ($conn->query($sql) === TRUE) 
    header('Location: ../index.php?p=login&r=regok');
else
    header('Location: ../index.php?p=register&r=regerror');
$conn->close();
?>