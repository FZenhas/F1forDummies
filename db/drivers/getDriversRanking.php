<?php

define('_DEFVAR', 1);
include('db/conn.php');

$sql = "SELECT d.driver_name, d.id, d.number, d.nationality_pic, t.logo, d.points FROM drivers d JOIN teams t ON d.team_id = t.id
ORDER BY d.points DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
<form action="db/drivers/updateDriversRanking.php" method="post">
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
    <form action="db/drivers/updateDriversRanking.php" method="post">
        <tbody>
            <tr>
                <th scope="row"><?= $position ?></th>
                <td ><?= $row['driver_name'] ?></td>
                <td><?= $row['number'] ?></td>
                <td><img src="<?= $row['nationality_pic'] ?>" width="30px" alt=""></td>
                <td><img src="<?= $row['logo'] ?>" width="30px" alt=""></td>
                <td><?= $row['points'] ?></td>
                <td><button id="drivers-points-btn-edit-<?= $row['id'] ?>" type="button" class="btn btn-primary" onclick="drivers_ranking_edit(<?= $row['id'] ?>)">Edit</button></td>
                <td><select type="text" id="input-points-<?= $row['id'] ?>" name="input-points-<?= $row['id'] ?>" width="10px">
                        <option value=<?= $row['points'] ?>+25>1º lugar: 25</option>
                        <option value=<?= $row['points'] ?>+18>2º lugar: 18</option>
                        <option value=<?= $row['points'] ?>+15>3º lugar: 15</option>
                        <option value=<?= $row['points'] ?>+12>4º lugar: 12</option>
                        <option value=<?= $row['points'] ?>+10>5º lugar: 10</option>
                        <option value=<?= $row['points'] ?>+8>6º lugar: 8</option>
                        <option value=<?= $row['points'] ?>+6>7º lugar: 6</option>
                        <option value=<?= $row['points'] ?>+4>8º lugar: 4</option>
                        <option value=<?= $row['points'] ?>+2>9º lugar: 2</option>
                        <option value=<?= $row['points'] ?>+1>10º lugar: 1</option>
                        <option value=<?= $row['points'] ?>+1>Fastest lap: 1</option>
                    </select></td>
                    <td><button id="ranking_btn_cancel-<?= $row['id'] ?>" type="button" class="btn btn-danger" onclick="drivers_ranking_cancel()">Cancel</button></td>
                <td><button type="submit" id="save-btn-points-<?= $row['id'] ?>" class="btn btn-primary" onclick="drivers_ranking_save(<?= $row['id'] ?>)">Salvar</button></td>
                <td><input id="input-id" name="input-id" value="<?= $row['id'] ?>"></input></td>
            </tr>
        </tbody>
        </form>
<?php
        $position++;

    }?>
<?php }
$conn->close();
?>