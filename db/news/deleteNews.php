<?php
if(!isset($_GET['id'])){
    header('Location: ../../index.php?p=admin-news&r=empty');
    exit();
}
$id = $_GET['id'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('../conn.php');

$sql = "DELETE FROM news WHERE id=$id";

if ($conn->query($sql) === TRUE)
    header('Location: ../../index.php?p=admin-news&r=deleteok');
else
    header('Location: ../../index.php?p=admin-news&r=deleteerror');
$conn->close();
?>