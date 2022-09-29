<main class="container border my-2 border-2 rounded shadow w-50">

<h1>Login</h1>

<div class="log-reg-box">

<form action="db/users/login.php" method="post">
  <div class="mb-3">
    <label for="form-username" class="form-label">Username</label>
    <input type="text" class="form-control" id="form-username" name="form-username" autocomplete="form-username" placeholder="Escreva o seu username" required>
  </div>

  <div class="mb-3">
    <label for="form-password" class="form-label">Password</label>
    <input type="password" class="form-control" id="form-password" name="form-password" placeholder="Escreva a sua password" required>
  </div>
  <div class="pwd-forgotten">
  <a href="index.php?p=resetPassword" id="reset-pwd">Esqueci-me da password</a>
  </div>
  <br>
  <div>
  <button type="submit" class="btn btn-dark">Entrar</button>
  </div>
  <br>
  <div class="start-register">
  <span>Não tem uma conta? <a href="index.php?p=registo">Registe-se aqui!</a></span>
  </div>

</form>
</div>
<br>
<?php
//VALIDA SE RECEBE CÓDIGO DE RESULTADO E APRESENTA ALERT CONSOANTE O MESMO
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'registook'){ ?>

    <div class="alert alert-success" role="alert">
      Registo efetuado com sucesso. Faça login.
    </div>

    <?php
  }else if($r == 'empty'){ ?>

    <div class="alert alert-dark" role="alert">
      Preencha todos os campos para se autenticar.
    </div>

    <?php
  }else if($r == 'loginerrado'){ ?>
    <div class="alert alert-dark" role="alert">
      Login Errado
    </div>

    <?php
  }
}?>