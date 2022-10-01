<?php

include('db/conn.php');

$sql = "SELECT team_name, logo, points FROM teams ORDER by points DESC";

$result = $conn->query($sql);

if($result ->num_rows > 0){
   ?><div id="classificacao" class="table table-striped table-hover"><?php
   $position = 1;
   while($row = $result -> fetch_assoc()) {
    ?>
<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
    <p><?= $position ?></p>
    <?=$row['team_name']?>
    <img src="<?=$row['logo']?>" width="15%" alt="">
    <span class="badge bg-dark rounded-pill"><?=$row['points']?></span>
    </li>
</ul>
<?php
$position++;
   }
   ?></div><?php
}
$conn->close();
?>