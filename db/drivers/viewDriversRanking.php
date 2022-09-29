<?php

define('_DEFVAR', 1);
include('db/conn.php');

$sql = "SELECT d.driver_name, d.number, d.nationality_pic, t.logo, d.points FROM drivers d JOIN teams t ON d.team_id = t.id
ORDER BY d.points DESC";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
?><div id="classificacao" class="table table-striped table-hover"><?php
  $position = 1;
  while ($row = $result->fetch_assoc()) {
  ?>
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <p><?= $position ?></p>
          <?= $row['driver_name'] ?>
          #<?= $row['number'] ?>
          <img src="<?= $row['nationality_pic'] ?>" width="8%" alt="">
          <img src="<?= $row['logo'] ?>" width="10%" alt="">
          <span class="badge bg-dark rounded-pill"><?= $row['points'] ?></span>
        </li>
      </ul>
    <?php
   $position++;
  }
    ?>
  </div><?php
      }
      $conn->close();
        ?>