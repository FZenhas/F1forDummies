<?php
//VALIDAR SE CAMPOS FORAM PASSADOS
if(empty($_POST['form-id'])) {
    header('Location:../../index.php?p=404');
    exit();
}

//LER PARA VARIÁVEIS
$id = $_POST['form-id'];
$_SESSION['data']= "u".$id.".png";

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('../conn.php');

$sql = "UPDATE `users` SET photo='u$id.png' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location:../../index.php?p=minhaconta&r=updateok');
} else {
    header('Location:../../index.php?p=minhaconta&r=updateerror');
}

$conn->close();
?>