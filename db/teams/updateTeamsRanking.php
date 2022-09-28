<?php
session_start();
if(empty($_SESSION['id'])){
    header('Location: ../../index.php?p=admin-teams-ranking&r=empty');
    exit();
}
$id = $_SESSION['id'];

$id = $_POST['input-id'];
$points = $_POST["input-points-teams-".$id];


// In the base page (directly accessed):
define('_DEFVAR', 1);
include('../conn.php');

$sql = "UPDATE teams SET points=$points where id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../index.php?p=admin-teams-ranking&r=editok');
}
else
    header('Location: ../../index.php?p=admin-teams-ranking&r=editerror');
$conn->close();
?>