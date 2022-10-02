<?php
session_start();
if(empty($_SESSION['id'])){
    header('Location: ../../index.php?p=admin&r=empty');
    exit();
}
$id = $_SESSION['id'];

$id = $_POST['results-input-id'];
$driver_id = $_POST["input-podium-".$id];


// In the base page (directly accessed):
define('_DEFVAR', 1);
include('../conn.php');

$sql = "UPDATE results SET driver_id=$driver_id where id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../index.php?p=admin-race-results&r=editok');
}
else
    header('Location: ../../index.php?p=admin-race-results&r=editerror');
$conn->close();
?>