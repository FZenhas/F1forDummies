<?php

define('_DEFVAR', 1);
include('db/conn.php');

$sql = "SELECT d.driver_name, d.number, d.date_of_birth, d.nationality, d.world_championship, d.curiosity, d.url_ig, d.picture, d.points, t.team_name FROM drivers d
JOIN teams t ON d.team_id = t.id Order by d.number ASC";

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
        ?><?php
        }
        $conn->close();
            ?>