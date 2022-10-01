<?php

define('_DEFVAR', 1);
include('db/conn.php');

$sql = "SELECT p.id, p.text, p.posted_at, u.id as user_id, u.username, u.photo FROM posts p JOIN users u ON p.user_id = u.id order by p.id DESC limit 50";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

?>
        <div class="clearfix"></div>
        <hr>
        <ul class="media-list">
            <div>
            <?php if ($row['photo'] != "") {
                ?><img id="post-pic" src="Img/users/<?= $row['photo'] ?>" alt="" ><?php
                } else {
                ?><img id="post-pic" src="Img/users/people.png" alt=""><?php
                }?>
            </div>
            <div class="media-body">
                <span class="text-muted pull-right">
                    <small class="text-muted"><?= $row['posted_at'] ?></small>
                </span>
                <strong class="text-success"><?= $row['username'] ?></strong>
                <p><?= $row['text'] ?></p>
            </div>
            </li>
            <?php if ($_SESSION['id'] == $row['user_id']) { ?>

                <div><i class="bi bi-pencil-fill" data-bs-toggle="modal" data-bs-target="#exampleModal-<?= $row['id'] ?>"></i>
                <?php } ?>
                <?php if ($_SESSION['id'] == 1 || $_SESSION['id'] == $row['user_id']) { ?>
                    <a href="db/forum/delete-posts.php?id=<?= $row['id'] ?>"><i class="bi bi-trash3-fill"></i>
                </div></a>
            <?php } ?>
        </ul>
        <!-- Modal -->
        <form action="db/forum/update-posts.php" method="post">

            <div class="modal fade" id="exampleModal-<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Editar post</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <textarea name="input-textarea" id="input-textarea" cols="60" rows="5"><?= $row['text'] ?></textarea>
                        </div>
                        <div class="modal-footer">
                            <td><input id="input-id" name="input-id" value="<?= $row['id'] ?>"></input></td>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-success">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

<?php }
}

$conn->close();
?>