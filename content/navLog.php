<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <?php
                if (empty($_SESSION['username'])) { //utilizador não autenticado
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=login">Login<i class="bi bi-box-arrow-in-right"></i></a>
                    </li>
                <?php } else if (!empty($_SESSION['username'])) { //utilizador autenticado
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if ($_SESSION['data'] != "") {
                            ?><img id="nav-user-photo" src="img/users/<?= $_SESSION['data'] ?>" id="form-img"alt=""><?php
                            } else {
                            ?><img id="nav-user-photo" src="img/users/people.png" id="form-img" alt=""><?php
                            } ?>
                        </a>
                        <h5 id="username">Hi, <?php echo $_SESSION['username'] ?>!</h5>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="index.php?p=account">Configurações conta</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index.php?p=forum">Forum</a>
                            </li>
                            <?php if (!empty($_SESSION['type']) && $_SESSION['type'] == 1) { //utilizador administrador
                            ?>
                                <li>
                                    <a class="dropdown-item" href="index.php?p=admin">Admin</a>
                                </li>
                            <?php } ?>
                            <li>
                                <a class="dropdown-item" href="index.php?p=logout">Logout</a>
                            </li>
                        <?php } ?>
                        </ul>
                    </li>
            </ul>
        </div>
    </div>
</nav>