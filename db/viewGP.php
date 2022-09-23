<?php


include('conn.php');

$sql = "SELECT gp.name, gp.country, gp.start_date, gp.end_date, gp.circuit, gp.circuit_image, GROUP_CONCAT(DISTINCT r.driver_position, ': ', d.driver_name SEPARATOR ', ') AS podium 
FROM results r JOIN grand_prix gp ON gp.id = r.grand_prix_id LEFT JOIN drivers d ON r.driver_id = d.id 
group by gp.name order by gp.id";

$result = $conn->query($sql);



if ($result->num_rows > 0) {
?><?php

  $btn_id = 0;

  while ($row = $result->fetch_assoc()) {
    $split_drivers_array = explode(",", $row['podium']);
  ?>

<div class="col-12 col-md-6 col-lg-4 mb-2">
  <div class="card mb-3">
    <a href="<?= $row['circuit_image'] ?>">
      <img id="circuito" src="<?= $row['circuit_image'] ?>" class="card-img-top" alt="...">
    </a>
    <div class="card-body">
      <h5 class="card-title"><?= $row['name'] ?></h5>
      <p class="card-text"><?= $row['country'] ?></p>
      <p class="card-text"><?= $row['circuit'] ?></p>
      <p class="card-text"><?= $row['start_date'] ?> - <?= $row['end_date'] ?></p>
      <br>

      <?php if ($row['podium'] == NULL) { ?>
        <p class="card-text"><small class="text-muted">Upcoming</small></p>
      <?php } else { ?>
        <p>
          <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#vencedores<?= $btn_id ?>" aria-expanded="false" aria-controls="vencedores<?= $btn_id ?>"> Pódio GP F1</button>
        </p>
        <div class="collapse" id="vencedores<?= $btn_id ?>">
          <div class="podium-border">
            <p><?= $split_drivers_array[0] ?> <i class="bi bi-trophy"></i></p>
            <p><?= $split_drivers_array[1] ?></p>
            <p><?= $split_drivers_array[2] ?></p>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</div>
<?php
    $btn_id++;
  }
?><?php

}
$conn->close();
  ?>