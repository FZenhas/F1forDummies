<?php
session_unset();
session_destroy();

if(isset($_GET['r'])){
    if($_GET['r']=='deleteok'){
        header('Location: index.php?p=paginainicial&r=deleteok');
        ob_end_flush();
        exit();
    }
}

if(!headers_sent() ){
    header('Location: index.php?p=paginainicial');
}else{
    echo '<script
    type="text/javascript">window.location.href="index.php?p=paginainicial";</script>';
}
