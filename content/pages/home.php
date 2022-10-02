<main class="container border my-2 border-2 rounded shadow">

  <div>

    <div class="container-fluid text-center bg-dark bg-gradient w-50" id="next-race">
      <div class="row ">
        <?php include('db/viewNextRaceCounter.php') ?>
      </div>
    </div>

    <br>
    <h1>Bem-vindo à página da F1 for Dummies!</h1>
    <br>


    <br>
    <p><b>F1 for Dummies</b> é uma página sobre os básicos da F1. Uma pequena resenha histórica, um quem é quem, desde pilotos a equipas a circuitos, os principais resultados da época e uma homenagem aos 3 segundos mais intensos de uma corrida.</p>
    <div>
      <img id="picPilotos" src="Img/Index/drivers.jpg" alt="">
    </div>
    <br>
    <div class="container ">
        <div class="text-center">
            <h2>Imagens únicas da Formula 1</h2> <br>
        </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <?php include('db/viewGallery.php') ?>
      </div>
    </div>

    <div class="container">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
      <img id="expandedImg" style="width:100%">
      <div id="imgtext"></div>
    </div>
  </div>

  <br>

  <?php
  //VALIDA SE RECEBE CÓDIGO DE RESULTADO E APRESENTA ALERT CONSOANTE O MESMO
  if (isset($_GET['r'])) {
    $r = $_GET['r'];
    if ($r == 'deleteok') { ?>

      <div class="alert alert-success" role="alert">
        Conta eliminada com sucesso
      </div>

  <?php
    }
  }
  ?>