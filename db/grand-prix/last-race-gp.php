<?php

define('_DEFVAR', 1);
include('db/conn.php');

$sql = "SELECT gp.name, gp.country
FROM results r JOIN grand_prix gp ON gp.id = r.grand_prix_id LEFT JOIN drivers d ON r.driver_id = d.id
WHERE d.driver_name is NOT null
group by gp.name order by gp.end_date DESC limit 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
  ?>
<span>Resultados obtidos após o <b><?=$row['name']?></b> - <?=$row['country']?></span>

<?php
}}
$conn->close();
  ?>