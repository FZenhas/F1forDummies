<main class="container border my-2 border-2 rounded shadow">

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="index.php?p=administracao">Upadate Classificação Pilotos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?p=admin-teams-ranking">Upadate Classificação Construtores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="index.php?p=admin-race-results">Update Resultado Corridas</a>
  </li>

</ul>

<br>

<div class="container">
    <div class="col text-center"><h1>Resultado Corridas</h1></div>
    <table class="table table-striped"><?php include('db/grand-prix/get-gp-results.php')?></table>
</div>
