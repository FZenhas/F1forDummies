<main class="container border my-2 border-2 rounded shadow">

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="index.php?p=admin">Upadate Classificação Pilotos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?p=admin-teams-ranking">Upadate Classificação Construtores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="index.php?p=admin-race-results">Update Resultado Corridas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="index.php?p=admin-news">Update News</a>
  </li>

</ul>

<div class="container ">
<div class="col text-center"><h1>News</h1></div>
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
<a href="index.php?p=create-edit-news"><button class="btn btn-light"><i class="bi bi-pencil-square"></i> Adicionar notícia</button></a>
<table class="table table-striped"><?php include('db/news/getNews.php')?></table>


