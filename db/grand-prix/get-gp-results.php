<?php

define('_DEFVAR', 1);
include('db/conn.php');

$sql = "SELECT gp.id, r.id as result_id, gp.name, gp.country, gp.start_date, gp.end_date, gp.circuit, gp.circuit_image,r.driver_position, d.driver_name
FROM results r
JOIN grand_prix gp ON gp.id = r.grand_prix_id
LEFT JOIN drivers d ON r.driver_id = d.id
WHERE r.driver_id is null LIMIT 3";

$result = $conn->query($sql);


$position = 1;
if ($result->num_rows > 0) { ?>
    <form action="db/grand-prix/updateResults.php" method="post">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Localização</th>
                <th scope="col">Circuito</th>
                <th scope="col">Data</th>
                <th scope="col">Posicao Resultado</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <?php

        while ($row = $result->fetch_assoc()) {
            $sql2 = "SELECT id, driver_name FROM drivers";
            $result_drivers = $conn->query($sql2);
        ?>
            <form action="db/grand-prix/updateResults.php" method="post">
                <tbody>
                    <tr>
                        <th scope="row"><?= $row['id'] ?></th>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['country'] ?></td>
                        <td><?= $row['circuit'] ?></td>
                        <td><?= $row['start_date'] ?> - <?= $row['end_date'] ?></td>
                        <td><?= $row['driver_position'] ?> - <?= $row['driver_name'] ?> </td>
                        <td><button id="gp-btn-edit-<?= $position ?>" type="button" class="btn btn-primary" onclick="gp_edit(<?= $position ?>)">Edit</button></td>
                        <?php if ($result_drivers->num_rows > 0) {?>
                            <td><select class="form-select" type="text" id="input-podium-<?= $position ?>" name="input-podium-<?= $row['result_id'] ?>" width="10px">
                           <?php while ($row2 = $result_drivers->fetch_assoc()) {
                                ?>
                                    <option value="<?= $row2['id'] ?>"><?= $row2['driver_name'] ?></option>
                                    <?php }} ?>
                                </select></td>
                                <td><button id="gp_btn_cancel-<?= $position ?>" type="button" class="btn btn-danger" onclick="gp_cancel()">Cancel</button></td>
                                <td><button type="submit" id="save-btn-gp-<?= $position ?>" class="btn btn-success" onclick="gp_save(<?= $row['id'] ?>)">Salvar</button></td>
                                <td><input id="results-input-id" name="results-input-id" value="<?= $row['result_id'] ?>" hidden></input></td>
                    </tr>
                </tbody>
            </form>
        <?php
        $position++;
        } ?>
    <?php }
$conn->close();
    ?>