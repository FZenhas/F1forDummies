<?php
if(!isset($_GET['id'])){
    header('Location: ../../index.php?p=forum&r=emptyposts');
    exit();
}
$id = $_GET['id'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('../conn.php');

$sql = "DELETE FROM posts WHERE id=$id";

if ($conn->query($sql) === TRUE)
    header('Location: ../../index.php?p=forum&r=deletepostok');
else
    header('Location: ../../index.php?p=forum&r=deleteposterror');
$conn->close();
?>