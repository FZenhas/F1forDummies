<?php 
if($_SESSION['tipoUtilizador']!=1){
    header('Location: index.php?p=404');
    exit();
}?>

<main class="container-fluid border my-2 border-2 rounded shadow">

<h1>Admin</h1>


