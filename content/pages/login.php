<main class="container border my-2 border-2 rounded shadow w-50">

<h1>Login</h1>

<form action="db/login.php" method="post">
  <div class="mb-3">
    <label for="form-username" class="form-label">Username</label>
    <input type="text" class="form-control" id="form-username" name="form-username" autocomplete="form-username" placeholder="Escreva o seu username" required>
  </div>


  <div class="mb-3">
    <label for="form-password" class="form-label">Password</label>
    <input type="password" class="form-control" id="form-password" name="form-password" placeholder="Escreva a sua password" required>
  </div>
  <button type="submit" class="btn btn-success">Entrar</button>
  <button class="btn btn-success"><a href="index.php?p=resetPassword">Esqueci-me da password</a></button>
  <button type="submit" class="btn btn-success">Não tem uma conta? <a href="index.php?p=registo">Registe-se aqui!</a></button>

</form>

<?php
//VALIDA SE RECEBE CÓDIGO DE RESULTADO E APRESENTA ALERT CONSOANTE O MESMO
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'registook'){ ?>

    <div class="alert alert-success" role="alert">
      Registo efetuado com sucesso, faça login
    </div>

    <?php
  }else if($r == 'empty'){ ?>

    <div class="alert alert-danger" role="alert">
      Preencha todos os campos para se autenticar
    </div>

    <?php
  }else if($r == 'loginerrado'){ ?>
    <div class="alert alert-danger" role="alert">
      Login Errado
    </div>

    <?php
  }
}?>