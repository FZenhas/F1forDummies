Olá, <?php echo $_SESSION['username'] ?>
<br>
<?php include('db/selectUtilizadorByUsername.php'); //var_dump($row);?>
<br>
<form action="db/updateUtilizador.php" method="post">
    <div>
        <label for="form-username">Username:</label>
        <input type="text" name="form-username" id="form-username" value="<?= $row['username']?>">
    </div>
    <div>
        <label for="form-password">Password:</label>
        <input type="text" name="form-password" id="form-password" value="<?= $row['password']?>">
    </div>
    <div>
        <label for="form-email">Email:</label>
        <input type="text" name="form-email" id="form-email" value="<?= $row['email']?>">
    </div>
    <input type="submit" class="btn btn-primary" value="Editar conta">
</form>
<form action="db/uploadImagem.php" method="post" enctype="multipart/form-data">
<input type="text" name="form-id" id="form-id" value="<?= $row['id']?>" readonly>
<?php 
    if($row['foto']!=""){
        ?><img src="img/utilizador/<?=$row['foto']?>" id="form-img" alt=""><?php
    }else{
        ?><img src="img/utilizador/default.png" id="form-img" alt=""><?php
    }
?>
<input type="file" name="form-img" id="form-img"><br>
<input type="submit" value="Editar imagem">
</form>

<br>
<a href="db/deleteUtilizador.php" type="button" class="btn btn-danger">Eliminar Conta</a>

<!--
<form action="db/deleteUtilizador.php" method="post">
    <input type="text" name="id" id="id" value="1">
    <button type="submit" class="btn btn-danger">Eliminar Conta</button>
</form>

<form action="db/deleteUtilizador.php?id=1" method="get">
    <button type="submit" class="btn btn-danger">Eliminar Conta</button>
</form>
-->