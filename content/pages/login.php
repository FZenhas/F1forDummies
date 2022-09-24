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

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Esqueci-me da password</button>
  <button type="submit" class="btn btn-primary">Entrar</button>
  <button type="submit" class="btn btn-primary">Não tem uma conta? <a href="index.php?p=registo">Registe-se aqui!</a></button>

</form>

<!-- Modal -->
<form action="db/resetPassword.php" method="get">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="form-email" class="form-label">Insira o seu username ou email</label>
          <input type="text" class="form-control" name="form-email" id="form-email">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Recuperar</button>
      </div>
    </div>
  </div>
</div>
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
  }else if($r == 'camposemfalta'){ ?>

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