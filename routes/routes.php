<?php

if(isset($_GET['p'])){
    $pag=$_GET['p'];

if($pag == 'home')
    include('content/pages/home.php');
else if($pag == 'f1')
    include('content/pages/f1.php');
else if($pag == 'drivers')
    include('content/pages/drivers.php');
else if($pag == 'drivers-ranking')
    include('content/pages/rankings/drivers-ranking.php');
else if($pag == 'teams-ranking')
    include('content/pages/rankings/teams-ranking.php');
else if($pag == 'teams')
    include('content/pages/teams.php');
else if($pag == 'schedule-2022')
    include('content/pages/schedule-2022.php');
else if($pag == 'pitstop')
    include('content/pages/pitstop.php');
else if($pag == 'iconic-drivers')
    include('content/pages/iconic-drivers.php');
else if($pag == 'quizz')
    include('content/pages/quizz.php');
else if($pag == 'login' && empty($_SESSION['username']))
    include('content/pages/login.php');
else if($pag == 'register' && empty($_SESSION['username']))
    include('content/pages/register.php');
else if($pag == 'account'&& !empty($_SESSION['username']))
    include('content/pages/account.php');
else if($pag == 'admin'&& !empty($_SESSION['type']) && $_SESSION['type']==1)
    include('content/pages/admin.php');
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
    include('content/pages/drivers.php');
else{
    include('content/pages/home.php');
}
?>