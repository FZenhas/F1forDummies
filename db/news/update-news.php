<?php
if(empty($_POST['form-id']) || empty($_POST['form-news'])){
    header('Location: ../../index.php?p=create-edit-news&r=empty');
    exit();
}
$id = $_POST['form-id'];
$text = $_POST['form-news'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('../conn.php');

$sql = "UPDATE news SET text='$text' WHERE id=$id";

if ($conn->query($sql) === TRUE)
{
    //RETORNA ID DO ULTIMO ELEMENTO INSERIDO
    $id = $conn->insert_id;
    header('Location: ../../index.php?p=admin-news&r=editnewsok');
}
else
    header('Location: ../../index.php?p=admin-news&r=editnewserror');
$conn->close();
?>