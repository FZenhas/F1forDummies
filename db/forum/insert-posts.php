<?php
session_start();

if(empty($_POST['form-post'])){
    header('Location: ../../index.php?p=forum&r=empty');
    exit();
}

$text = $_POST['form-post'];
$id = $_SESSION['id'];
$current_date = date("Y-m-d H:i:sa");

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('../conn.php');

$sql = "INSERT INTO posts (text, posted_at, user_id) VALUES ('$text', '$current_date', '$id')";

if ($conn->query($sql) === TRUE)
{
    //RETORNA ID DO ULTIMO ELEMENTO INSERIDO
    $id = $conn->insert_id;
    header('Location: ../../index.php?p=forum&r=addpostok');
}
else
    header('Location: ../../index.php?p=forum&r=addposterror');
$conn->close();
?>