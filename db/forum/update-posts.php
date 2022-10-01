<?php
if(empty($_POST['input-id']) || empty($_POST['input-textarea'])){
    header('Location: ../../index.php?p=forum&r=empty');
    exit();
}
$id = $_POST['input-id'];
$text = $_POST['input-textarea'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('../conn.php');

$sql = "UPDATE posts SET text='$text' WHERE id=$id";

if ($conn->query($sql) === TRUE)
{
    //RETORNA ID DO ULTIMO ELEMENTO INSERIDO
    $id = $conn->insert_id;
    header('Location: ../../index.php?p=forum&r=editpostok');
}
else
    header('Location: ../../index.php?p=forum&r=editposterror');
$conn->close();
?>