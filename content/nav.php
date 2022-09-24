<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?p=paginainicial"><img src="img/Logo/logotipo2.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?p=F1">Fórmula 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=Pilotos">Pilotos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=Construtores">Construtores</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Classificação
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php?p=Classificacao-pilotos">Classificação Pilotos</a></li>
            <li><a class="dropdown-item" href="index.php?p=Classificacao-construtores">Classificação Construtores</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=Circuito">Circuitos 2022</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=Pitstop">Pitstop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=PilotosIconicos">Pilotos Icónicos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=Quizz">Quizz</a>
        </li>
        <?php if(empty($_SESSION['username'])){ //utilizador não autenticado?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
          </li>
        <?php }
        else if(!empty($_SESSION['username'])){ //utilizador autenticado?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=minhaconta">Minha Conta</a>
          </li>
          <?php if(!empty($_SESSION['type']) && $_SESSION['type']==1){ //utilizador administrador?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=administracao">Admin</a>
            </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=logout">Logout</a>
          </li>
        <?php }?>
      </ul>
      <form class="d-flex" action="index.php">
        <input class="form-control me-2" name="search" type="search" placeholder="Pesquisar pilotos" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>