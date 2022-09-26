<?php

define('_DEFVAR', 1);
include('conn.php');

$sql = "SELECT d.driver_name, d.id, d.number, d.nationality_pic, t.logo, d.points FROM drivers d JOIN teams t ON d.team_id = t.id
ORDER BY d.points DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
        <thead>
            <tr>
                <th scope="col">Posição</th>
                <th scope="col">Nome</th>
                <th scope="col">Número</th>
                <th scope="col">Nacionalidade</th>
                <th scope="col">Equipa</th>
                <th scope="col">Pontos</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
    <?php
    $position = 1;
    while ($row = $result->fetch_assoc()) {
    ?>
        <tbody>
            <tr>
                <th scope="row"><?= $position ?></th>
                <td><?= $row['driver_name'] ?></td>
                <td><?= $row['number'] ?></td>
                <td><img src="<?= $row['nationality_pic'] ?>" width="30px" alt=""></td>
                <td><img src="<?= $row['logo'] ?>" width="30px" alt=""></td>
                <td><?= $row['points'] ?></td>
                <td><button id="drivers-points-btn-edit-<?=$row['id']?>" type="button" class="btn btn-primary" onclick="drivers_ranking_edit(<?=$row['id']?>)">Edit</button></td>
                <td><input type="text" id="input-points-<?=$row['id']?>"width="10px"></td>
                <td><button id="save-btn-points-<?=$row['id']?>" class="btn btn-primary" onclick="drivers_ranking_save(<?=$row['id']?>)">Guardar</button></td>
            </tr>
        </tbody>

<?php
$position++;
    }
}
$conn->close();
?>