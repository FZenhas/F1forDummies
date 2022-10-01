<?php

define('_DEFVAR', 1);
include('db/conn.php');

$sql = "SELECT * FROM news order by id DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>


        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Notícias</th>
            </tr>
        </thead>
        <?php

        while ($row = $result->fetch_assoc()) {
        ?>
                <tbody>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['text'] ?></td>

                        <td><a href="index.php?p=create-edit-news&id=<?=$row['id']?>"><button class="btn btn-success"><i class="bi bi-pencil"> Editar</button></a></td>

                        <td><a href="db/news/deleteNews.php?id=<?=$row['id']?>"><button class="btn btn-danger">Apagar</button></a></td>

                    </tr>
                </tbody>

        <?php
        } ?>
    <?php }


$conn->close();
    ?>