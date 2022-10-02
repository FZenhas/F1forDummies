<?php

define('_DEFVAR', 1);
include('conn.php');

$sql = "SELECT gp.name, gp.country_image, gp.country, gp.start_date, gp.end_date, DATEDIFF(gp.end_date, CURRENT_TIMESTAMP) as time FROM grand_prix gp
JOIN results r
ON gp.id = r.grand_prix_id
WHERE r.driver_id is null LIMIT 1";

$result = $conn->query($sql);


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <div class="col-sm-12">
            <img class="next-race-img" src="<?= $row['country_image'] ?>" alt="">
            <p>Próxima corrida #17 <b><?= $row['country'] ?></b></p>
            <?php if ($row['time'] == 0) { ?>
                <button id="race-time"><i class="bi bi-clock-fill" id="clock"> </i><b>Racing day!</b></button>
            <?php } else { ?>
                <button id="race-time"><i class="bi bi-clock-fill" id="clock"> </i>Faltam: <b><?= $row['time'] ?> dias</b></button>
            <?php } ?>
            <p><b><?= $row['name'] ?> </b></p>
            <p><?= $row['start_date'] ?> - <?= $row['end_date'] ?></p>
        </div>

<?php }
}
$conn->close();
?>