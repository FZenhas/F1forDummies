<?php
define('_DEFVAR', 1);
include('db/conn.php');

if(empty($_GET['id'])){
    header('Location: ../index.php?p=404');
    exit();
}
$id=$_GET['id'];
if(isset($_GET['p'])){
    if($_GET['p']=='create-edit-news'){
        $sql = "SELECT * FROM news WHERE id=$id";
    }
}
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
}else{
    header('Location: ../index.php?p=404');
    exit();
}

$conn->close();
?>