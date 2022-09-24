<main class="container border my-2 border-2 rounded shadow w-50">

<h1>Registo</h1>

<form action="db/register.php" method="post">
  <div class="mb-3">
    <label for="form-username" class="form-label">Username</label>
    <input type="text" class="form-control" id="form-username" name="form-username" autocomplete="form-username" placeholder="Escreva o seu username" required>
  </div>

  <div class="mb-3">
    <label for="form-email" class="form-label">Email</label>
    <input type="email" class="form-control" name="form-email" autocomplete="form-email" id="form-email" placeholder="Escreva o seu email" required>
  </div>

  <div class="mb-3">
    <label for="form-password1" class="form-label">Password</label>
    <input type="password" class="form-control" id="form-password1" name="form-password1" placeholder="Escreva a sua password" required>
  </div>

  <div class="mb-3">
    <label for="form-password2" class="form-label">Confirme a Password</label>
    <input type="password" class="form-control" id="form-password2" name="form-password2" placeholder="Confirme a sua password"required>
  </div>
  <button type="submit" class="btn btn-primary">Registar</button>
  <button class="btn btn-primary"><a href="index.php?p=paginainicial">Sair</a></button>
</form>
<br>

<?php
//VALIDA SE RECEBE CÓDIGO DE RESULTADO E APRESENTA ALERT CONSOANTE O MESMO//VALIDA SE RECEBE CÓDIGO DE ERRO E APRESENTA ALERT CONSOANTE O ERRO
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'camposemfalta'){ ?>

    <div class="alert alert-danger" role="alert">
      Preencha todos os campos para se registar
    </div>

    <?php
  }else if($r == 'pwderrada'){ ?>
    <div class="alert alert-danger" role="alert">
      Passwords não correspondem
    </div>

    <?php }else if($r == 'usernameexistente'){?>

    <div class="alert alert-danger" role="alert">
      Username já existe
    </div>
    <?php
  }
}
?>









