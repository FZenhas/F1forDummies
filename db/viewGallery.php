<?php

include('conn.php');

$sql = "SELECT * FROM gallery";

$result = $conn->query($sql);

$counter = 1;
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) { ?>

        <div class="col-12 col-md-6 col-lg-3 mb-2" id="intro-gallery">
        <img id= "gallery" src="<?= $row['picture'] ?>" class="img-fluid" alt="..." onclick="myFunction(this)">
    </div>

    <?php }
    ?>
<?php
}
$conn->close();
?>