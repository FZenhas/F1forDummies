<?php

define('_DEFVAR', 1);
include('conn.php');

if (empty($_GET['search'])) {
    if (!headers_sent()) {
        header('Location: index.php?p=404');
    } else {
        echo '<script
        type="text/javascript">window.location.href="index.php?p=404";</script>';
    }
    exit();
}


$param = $_GET['search'];

$sql = "SELECT d.driver_name, d.number, d.date_of_birth, d.nationality, d.world_championship, d.curiosity, d.url_ig, d.picture, d.points, t.team_name FROM drivers d
JOIN teams t ON d.team_id = t.id WHERE d.visibility=1 AND d.driver_name LIKE '%$param%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
        <div class="col-12 col-md-6 col-lg-3 mb-2">
            <div class="flip-card-container">
                <div class="flip-card">
                    <div class="flip-card-front"><img src="<?= $row['picture'] ?>" alt=""></div>
                    <div class="flip-card-back">
                        <h2><?= $row['driver_name'] ?> #<?= $row['number'] ?></h2>
                        <p>Equipa: <?= $row['team_name'] ?></p>
                        <p>DOB:<?= $row['date_of_birth'] ?></p>
                        <p>Nacionalidade: <?= $row['nationality'] ?></p>
                        <p>Campeonatos do mundo: <?= $row['world_championship'] ?></p>
                        <a href="<?= $row['url_ig'] ?>" target="_blank>" i class="bi bi-instagram"></a>
                        <br>
                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="<?= $row['curiosity'] ?>">

                            <button class="btn btn-success" type="button">Sabia que...</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

$sql = "SELECT team_name, full_team_name, location,  team_chief, motor, world_championships, logo, car_pic, url_site, url_ig, team_name
FROM teams
WHERE team_name LIKE '%$param%'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

            ?>
        <div class="col-12 col-md-6 col-lg-4 mb-2">
            <div id="construtores" class="card" style="width: 18rem;">
                <img src="<?= $row['logo'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['team_name'] ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nome completo: <b><?= $row['full_team_name'] ?></b></li>
                    <li class="list-group-item"><?= $row['location'] ?></li>
                    <li class="list-group-item">Chefe da Equipa: <?= $row['team_chief'] ?></li>
                    <li class="list-group-item">Motor: <?= $row['motor'] ?></li>
                    <li class="list-group-item">Campeonatos do Mundo: <?= $row['world_championships'] ?></li>
                    <li class="list-group-item"><img id="pic-car" src="<?= $row['car_pic'] ?>" alt=""></li>
                </ul>
                <div id="contrutores-a" class="card-body">
                    <a href="<?= $row['url_site'] ?>" target="_blank>" class="card-link">Site Oficial</a>
                    <br>
                    <a href="<?= $row['url_ig'] ?>" target="_blank>" i class="bi bi-instagram"></a>
                </div>
            </div>
        </div>
    <?php
            }
    ?></div><?php
        }
        $conn->close();
            ?>