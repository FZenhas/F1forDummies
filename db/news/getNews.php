<?php

define('_DEFVAR', 1);
include('db/conn.php');

$sql = "SELECT * FROM news order by id DESC";

$result = $conn->query($sql);


//VALIDA SE RECEBE CÓDIGO DE RESULTADO E APRESENTA ALERT CONSOANTE O MESMO
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'addnewsok'){ ?>

    <div class="alert alert-success" role="alert">
      Notícia adicionada com sucesso.
    </div>
    <?php
  }else if($r == 'addnewserror'){ ?>

    <div class="alert alert-dark" role="alert">
      Erro ao adicionar a notícia.
    </div>
    <?php
  }else if($r == 'editnewsok'){ ?>

    <div class="alert alert-dark" role="alert">
    Notícia editada com sucesso.
    </div>
    <?php
}else if($r == 'editnewserror'){ ?>

    <div class="alert alert-dark" role="alert">
    Erro ao editar a notícia.
    </div>
    <?php
}
else if($r == 'deletenewsok'){ ?>

    <div class="alert alert-dark" role="alert">
    Notícia apagada com sucesso
    </div>
    <?php
}
else if($r == 'deletenewserror'){ ?>

    <div class="alert alert-dark" role="alert">
    Erro a apagar notícia.
    </div>
    <?php
}
}

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