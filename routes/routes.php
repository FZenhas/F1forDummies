<?php

if(isset($_GET['p'])){
    $pag=$_GET['p'];

if($pag == 'paginainicial')
    include('content/pages/paginainicial.php');
else if($pag == 'F1')
    include('content/pages/F1.php');
else if($pag == 'Pilotos')
    include('content/pages/Pilotos.php');
else if($pag == 'Classificacao-pilotos')
    include('content/pages/Classificacao/Classificacao-pilotos.php');
else if($pag == 'Classificacao-construtores')
    include('content/pages/Classificacao/Classificacao-construtores.php');
else if($pag == 'Construtores')
    include('content/pages/Construtores.php');
else if($pag == 'Circuito')
    include('content/pages/Circuito.php');
else if($pag == 'Pitstop')
    include('content/pages/Pitstop.php');
else if($pag == 'PilotosIconicos')
    include('content/pages/PilotosIconicos.php');
else if($pag == 'Quizz')
    include('content/pages/Quizz.php');
else if($pag == 'login' && empty($_SESSION['username']))
    include('content/pages/login.php');
else if($pag == 'registo' && empty($_SESSION['username']))
    include('content/pages/registo.php');
else if($pag == 'minhaconta'&& !empty($_SESSION['username']))
    include('content/pages/minha-conta.php');
else if($pag == 'administracao'&& !empty($_SESSION['type']) && $_SESSION['type']==1)
    include('content/pages/administracao.php');
else if($pag == 'forum'&& !empty($_SESSION['username']))
    include('content/pages/forum.php');
else if($pag == 'admin-teams-ranking' && !empty($_SESSION['type']) && $_SESSION['type']==1)
    include('content/pages/admin-teams-ranking.php');
else if($pag == 'admin-race-results' && !empty($_SESSION['type']) && $_SESSION['type']==1)
    include('content/pages/admin-race-results.php');
else if($pag == 'admin-news' && !empty($_SESSION['type']) && $_SESSION['type']==1)
    include('content/pages/admin-news.php');
    else if($pag == 'create-edit-news' && !empty($_SESSION['type']) && $_SESSION['type']==1)
    include('content/pages/create-edit-news.php');
else if($pag == 'resetPassword')
    include('content/pages/resetPassword.php');
else if($pag == 'logout' && !empty($_SESSION['username']))
    include('content/pages/logout.php');

else
    include ('content/pages/404.php');
}else if(isset($_GET['search']))
    include('content/pages/Pilotos.php');
else{
    include('content/pages/paginainicial.php');
}
?>