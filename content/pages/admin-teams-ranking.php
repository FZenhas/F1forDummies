<main class="container border my-2 border-2 rounded shadow">

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="index.php?p=administracao">Classificação Pilotos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="index.php?p=admin-teams-ranking">Classificação Construtores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#">Update Resultado Corridas</a>
  </li>

</ul>

<br>

<div class="container">
    <div class="col text-center"><h1>Classificação Equipas</h1></div>
    <table class="table table-striped"><?php include('db/teams/getTeamsRanking.php')?></table>
</div>