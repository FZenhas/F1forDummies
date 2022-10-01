<?php
if(empty($_POST['form-news'])){
    header('Location: ../../index.php?p=create-edit-news&r=empty');
    exit();
}
$text = $_POST['form-news'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('../conn.php');

$sql = "INSERT INTO news (text) VALUES ('$text')";

if ($conn->query($sql) === TRUE)
{
    //RETORNA ID DO ULTIMO ELEMENTO INSERIDO
    $id = $conn->insert_id;
    header('Location: ../../index.php?p=admin-news&r=addnewsok');
}
else
    header('Location: ../../index.php?p=admin-news&r=addnewserror');
$conn->close();
?>