<main class="container border my-2 border-2 rounded shadow w-50">

<h1>Reset Password</h1>

<p>To reset your password, please enter your email address below</p>

<form action="db/resetPassword.php" method="get">
<div class="mb-3">
    <label for="form-email" class="form-label">Insira o seu username ou email</label>
    <input type="text" class="form-control" name="form-email" id="form-email">
</div>
<div>
    <button type="submit" class="btn btn-primary">Recuperar</button>
</div>