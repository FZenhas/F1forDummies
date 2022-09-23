<header class="container-fluid">

<ul class="nav justify-content-end">

        <?php 
        if (empty($_SESSION['username'])) {
        ?>
        <li>
            <a class="nav-link" href="index.php?p=login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>

        <?php
        } else { ?>
            <li>
            <a class="nav-link" href="index.php?p=minhaconta">Minha Conta</a>
            </li>
            <?php
            if ($_SESSION['tipoUtilizador'] == 1) { //APRESENTA ADMINISTRAÇÃO DE FOR USER ADMIN
            ?>
                <li>
                <a class="nav-link" href="index.php?p=administracao">Admin</a>
                </li>
            <?php
            } ?>
            <li>
            <a class="nav-link" href="index.php?p=logout">Logout</a>
            </li>
        <?php } ?>
    </ul>
    <?php include('nav.php'); ?>
</header>