<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?p=paginainicial"><img src="img/Logo/logo-f1-dummies.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?p=F1">Fórmula 1</a>
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
      </ul>
      <div class="search-nav-bar">
        <div>
          <form class="d-flex" action="index.php">
            <input class="form-control me-2" name="search" type="search" id="search" placeholder="Pesquisar" aria-label="Search" onkeydown="input_search()" onchange="input_search()">
            <button class="btn" id="search-btn-nav" type="submit" disabled><i class="bi bi-search"></i></button>
          </form>
        </div>
        <div>

        </div>
      </div>
    </div>
  </div>
</nav>