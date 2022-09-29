<?php

define('_DEFVAR', 1);
include('db/conn.php');

$sql = "SELECT * FROM news";

$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>


<form action="db/news/updateNews.php" method="post">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Notícias</th>
        </tr>
    </thead>
    <?php

    while ($row = $result->fetch_assoc()) {
    ?>
    <form action="db/news/updateNews.php" method="post">
        <tbody>
            <tr>
               <td><?= $row['id'] ?></td>
               <td><?= $row['text'] ?></td>

              <td><button type="submit" class="btn btn-primary">Ver</button>
              <td><button type="submit" class="btn btn-danger">Editar</button>
              <td><button type="submit" class="btn btn-success">Apagar</button>

              </td>
            </tr>
        </tbody>
        </form>
<?php
    }?>
<?php }


$conn->close();
?>