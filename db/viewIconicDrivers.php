<?php

define('_DEFVAR', 1);
include('conn.php');

$sql = "SELECT * FROM iconic_drivers";

$result = $conn->query($sql);

$counter = 1;
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {


$text_class = '';

if($counter == 1){ 
    $text_class = 'carousel-item active';
}else{
    $text_class = 'carousel-item';
}
?>
<div class="<?= $text_class?>">
    <img src="<?= $row['picture'] ?>" class="d-block w-100" alt="...">
        <div class="background">
            <div class="transbox">
                <div class="carousel-caption d-none d-md-block">
                    <h2><mark><?= $row['name'] ?></mark></h2>
                    <div class="row">
                        <div class="column">Nacionalidade: <?= $row['nationality'] ?></div>
                        <div class="column">n. <?= $row['date_of_birth'] ?> <?= $row['date_of_death'] ?></div>
                        <div class="column">Equipas: <?= $row['team'] ?></div>
                        <div class="column">Campeonatos do Mundo: <?= $row['world_championship'] ?></div>
                    </div>
                </div>
            </div>
        </div>
</div>

    <?php
    $counter++;
    }
    ?>
<?php
}
$conn->close();
?>