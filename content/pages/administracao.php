<main class="container border my-2 border-2 rounded shadow">

<?php
if($_SESSION['type']!=1){
    header('Location: index.php?p=404');
    exit();
}?>


<h1>Admin</h1>

<div class="container">
    <div class="col text-center"><h2>Pilotos</h2></div>
    <table class="table table-striped"><?php include('db/getDriversRanking.php')?></table>
</div>

<hr>

