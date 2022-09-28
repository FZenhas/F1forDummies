<?php

define('_DEFVAR', 1);
include('db/conn.php');

$sql = "SELECT team_name, logo, points, id FROM teams ORDER by points DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>


<form action="db/teams/updateTeamsRanking.php" method="post">
    <thead>
        <tr>
            <th scope="col">Posição</th>
            <th scope="col">Nome</th>
            <th scope="col">Logo</th>
            <th scope="col">Pontos</th>
            <th scope="col">Editar</th>
        </tr>
    </thead>
    <?php
    $position = 1;

    while ($row = $result->fetch_assoc()) {
    ?>
    <form action="db/teams/updateTeamsRanking.php" method="post">
        <tbody>
            <tr>
                <th scope="row"><?= $position ?></th>
                <td ><?= $row['team_name'] ?></td>
                <td><img src="<?= $row['logo'] ?>" width="30px" alt=""></td>
                <td><?= $row['points'] ?></td>
                <td><button id="teams-points-btn-edit-<?= $row['id'] ?>" type="button" class="btn btn-primary" onclick="teams_ranking_edit(<?= $row['id'] ?>)">Edit</button></td>

                <td><input type="text" id="input-points-teams-<?= $row['id'] ?>" name="input-points-teams-<?= $row['id'] ?>" width="10px" value=""></input></td>

                <td><button id="ranking_teams_btn_cancel-<?= $row['id'] ?>" type="button" class="btn btn-danger" onclick="teams_ranking_cancel()">Cancel</button></td>
                <td><button type="submit" id="save-btn-teams-points-<?= $row['id'] ?>" class="btn btn-primary" onclick="teams_ranking_save(<?= $row['id'] ?>)">Salvar</button></td>
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