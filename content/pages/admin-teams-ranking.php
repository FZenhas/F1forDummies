<main class="container border my-2 border-2 rounded shadow">

  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link" id="nav-admin" aria-current="page" href="index.php?p=admin">Upadate Classificação Pilotos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" id="nav-admin" href="index.php?p=admin-teams-ranking">Upadate Classificação Construtores</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-admin" href="index.php?p=admin-race-results">Update Resultado Corridas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-admin" href="index.php?p=admin-news">Update News</a>
    </li>
  </ul>
  <br>

  <h1>Classificação Construtores</h1>
  <br>

  <?php
  if (isset($_GET['r'])) {
    $r = $_GET['r'];
    if ($r == 'editok') { ?>

      <div class="alert alert-success" role="alert">
        Resultado editado com sucesso.
      </div>
    <?php
    } else if ($r == 'editerror') { ?>

      <div class="alert alert-danger" role="alert">
        Erro na edição dos resultados
      </div>
  <?php
    }
  } ?>
  <table class="table table-striped table-dark"><?php include('db/teams/getTeamsRanking.php') ?></table>
  </div>