<main class="container border my-2 border-2 rounded shadow">

<?php
if($_SESSION['type']!=1){
    header('Location: index.php?p=404');
    exit();
}?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php?p=administracao">Update Classificação Pilotos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?p=admin-teams-ranking">Update Classificação Construtores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?p=admin-race-results">Update Resultado Corridas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?p=admin-news">Update News</a>
  </li>
</ul>

<br>
<div class="container">
    <div class="col text-center"><h1>Classificação Pilotos</h1></div>
<?php
//VALIDA SE RECEBE CÓDIGO DE RESULTADO E APRESENTA ALERT CONSOANTE O MESMO
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'editok'){ ?>

    <div class="alert alert-success" role="alert">
      Resultado editado com sucesso.
    </div>
    <?php
  }else if($r == 'editerror'){ ?>

    <div class="alert alert-danger" role="alert">
      Erro na edição dos resultados
    </div>
    <?php
  }
}?>
    <table class="table table-striped table-dark"><?php include('db/drivers/getDriversRanking.php')?></table>
</div>



