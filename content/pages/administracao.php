<?php
if($_SESSION['type']!=1){
    header('Location: index.php?p=404');
    exit();
}?>

<main class="container-fluid border my-2 border-2 rounded shadow">

<h1>Admin</h1>

<h2>USERS</h2>
<?php include('db/viewDriversRanking.php')?>
<hr>

