<main class="container border my-2 border-2 rounded shadow">

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="index.php?p=administracao">Upadate Classificação Pilotos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="index.php?p=admin-teams-ranking">Upadate Classificação Construtores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="index.php?p=admin-race-results">Update Resultado Corridas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?p=admin-news">Update News</a>
  </li>

</ul>

<br>

<div class="container">
    <div class="col text-center"><h1>Classificação Construtores</h1></div>
    <table class="table table-striped table-dark"><?php include('db/teams/getTeamsRanking.php')?></table>
</div>