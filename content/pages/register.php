<main class="container border my-2 border-2 rounded shadow w-50">

  <h1>Registo</h1>

  <div class="log-reg-box">
    <form action="db/users/register.php" method="post">
      <div class="mb-3">
        <label for="form-username" class="form-label">Username</label>
        <input type="text" class="form-control" id="form-username" name="form-username" autocomplete="form-username" placeholder="Escreva o seu username" required>
      </div>

      <div class="mb-3">
        <label for="form-email" class="form-label">Email</label>
        <input type="email" class="form-control" name="form-email" autocomplete="form-email" id="form-email" placeholder="Escreva o seu email" aria-describedby="passwordHelpBlock" required>
      </div>

      <div class="mb-3">
        <label for="form-password1" class="form-label">Password</label>
        <input type="password" class="form-control" id="form-password1" name="form-password1" placeholder="Escreva a sua password" required>
        <div id="passwordHelpBlock" class="form-text">
          A sua password deve conter pelo menos 8 caracteres, e deve incluir pelo menos uma letra maiúscula e um número.
        </div>
      </div>

      <div class="mb-3">
        <label for="form-password2" class="form-label">Confirme a Password</label>
        <input type="password" class="form-control" id="form-password2" name="form-password2" placeholder="Confirme a sua password" required>
      </div>
      <div>
        <button type="submit" class="btn btn-dark">Registar</button>
      </div>
      <div class="reg-back-intro">
        <a href="index.php?p=home">Voltar à página incial</a>
      </div>
    </form>
    <br>
  </div>

  <?php
  if (isset($_GET['r'])) {
    $r = $_GET['r'];
    if ($r == 'empty') { ?>

      <div class="alert alert-dark" role="alert">
        Preencha todos os campos para se registar
      </div>

    <?php
    } else if ($r == 'pwderror') { ?>
      <div class="alert alert-dark" role="alert">
        Passwords não correspondem
      </div>

    <?php } else if ($r == 'regerror') { ?>

      <div class="alert alert-dark" role="alert">
        Username já existe
      </div>

    <?php } else if ($r == 'pwdnotworking') { ?>

      <div class="alert alert-dark" role="alert">
        A sua password deve conter pelo menos 8 caracteres, e deve incluir pelo menos uma letra maiúscula e um número
      </div>
  <?php
    }
  }
  ?>