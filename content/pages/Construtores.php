<main class="container border my-2 border-2 rounded shadow">
  <br>
  <h1>Construtores de Fórmula 1</h1>
  <br>
  <div class="container-fluid">
    <div class="row">

    <?php 
    if(!isset($_GET['search-teams']))
        include('db/viewTeams.php');
    else
        include('db/searchTeams.php');
    ?>
      
      <p>Para saber qual a classificação atual de cada Construtor consulta esta <a href="index.php?p=Classificacao-construtores"> página.</a></p>
    </div>
  </div>
