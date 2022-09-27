<main class="container border my-2 border-2 rounded shadow w-50">

<h1>Reset Password</h1>

<br>
<form action="db/users/resetPassword.php" method="get">
<div class="mb-3">
    <label for="form-email" class="form-label">Para redefinir a sua senha, insira o seu username ou email</label>
    <input type="text" class="form-control" name="form-email" id="form-email">
</div>
<div>
    <button type="submit" class="btn btn-primary">Recuperar</button>
</div>