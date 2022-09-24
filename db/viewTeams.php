<?php

define('_DEFVAR', 1);
include('conn.php');

$sql = "SELECT t.team_name, t.full_team_name, t.location, t.team_chief, t.motor, t.world_championships, t.logo, t.car_pic, t.url_site, t.url_ig, t.team_name,
GROUP_CONCAT(DISTINCT d.driver_name SEPARATOR ', ') AS drivers
FROM teams t
JOIN drivers d 
ON t.id = d.team_id
GROUP BY t.team_name";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $split_drivers_array = explode (",", $row['drivers']); 
        ?>
    <div class="col-12 col-md-6 col-lg-4 mb-2">
        <div id="construtores" class="card" style="width: 18rem;">
          <img src="<?=$row['logo']?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?=$row['team_name']?></h5>
            <p class="card-text"><?=$split_drivers_array[0]?> & <?=$split_drivers_array[1]?></p> 
          </div> 
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Nome completo: <b><?=$row['full_team_name']?></b></li>
            <li class="list-group-item"><?=$row['location']?></li>
            <li class="list-group-item">Chefe da Equipa: <?=$row['team_chief']?></li>
            <li class="list-group-item">Motor: <?=$row['motor']?></li>
            <li class="list-group-item">Campeonatos do Mundo: <?=$row['world_championships']?></li>
            <li class="list-group-item"><img id="pic-car" src="<?=$row['car_pic']?>" alt=""></li>
          </ul>
          <div id="contrutores-a" class="card-body">
            <a href="<?=$row['url_site']?>" target="_blank>" class="card-link">Site Oficial</a>
            <br>
            <a href="<?=$row['url_ig']?>" target="_blank>" i class="bi bi-instagram"></a>
          </div>
        </div>
    </div>
<?php
}
?></div><?php
}
$conn->close();
?>