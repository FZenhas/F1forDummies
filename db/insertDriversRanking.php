<?php

session_start();


include('conn.php');

$sql = "SELECT * FROM pilotos ORDER BY pontos DESC";

$result = $conn->query($sql);

if($result ->num_rows > 0){
   ?><div id="classificacao" class="col-12 col-md-8"><?php
   $position = 1;
   while($row = $result -> fetch_assoc()) {
    ?>
    <ul class="list-group">
      <li  class="list-group-item d-flex justify-content-between align-items-center"></p>
      <p><?=$position?></p>
        <?= $row['primeiro_nome']?> <p> </p> <?=$row['segundo_nome']?>
        <img src="Img/bandeiras/<?=$row['pic_nacionalidade']?>" width="8%" id="form-img" alt="">
        <img src="Img/Logos_equipas/<?=$row['logo']?>" width="15%" id="form-img" alt=""> 
        <span class="badge bg-dark rounded-pill"><?=$row['pontos']?></span>
      </li>
    </ul>
<?php
$position++;
   }
   ?></div><?php
}
$conn->close();
?>

    