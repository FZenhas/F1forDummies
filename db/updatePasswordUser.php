<?php
// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

$sql = "UPDATE `users` SET password=MD5('$novaPass') WHERE id=$id";

if ($conn->query($sql) === TRUE) {
} else if(empty($param)){
    header('Location:../index.php?p=administracao&r=updateerro');
} else if(!empty($param)){
    header('Location:../index.php?p=login&r=updateerro');
}

$conn->close();
?>