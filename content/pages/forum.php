<main class="container border my-2 border-2 rounded shadow w-50">
    <br>
    <h1>Forum F1 4 Dummies</h1>
    <br>
    <h2>Um espaço para partilhar todas as reflexões, polémicas, opiniões, comentários, palpites sobre as corridas, pilotos, equipas,... tudo o que quiser sobre o fantástico mundo da F1!</h2>
    <br>

    <div class="container">
        <div class="row bootstrap snippets bootdeys">
            <div class="col-md-8 col-sm-12">
                <div class="comment-wrapper">
                    <div class="panel panel-info">
                        <form action="db/forum/insert-posts.php" method="post">
                            <input type="number" class="form-control" id="form-id" name="form-id" value="<?php if (isset($_GET['id'])) echo $row['id']; ?>" readonly hidden>
                            <div class="panel-body">
                                <textarea class="form-control" id="form-post" rows="3" name="form-post" autocomplete="form-post" placeholder="escreva um comentário..." rows="3" required><?php if (isset($_GET['id'])) echo $row['text']; ?></textarea>
                                <br>
                                <button type="submit" class="btn btn-dark">Post</button>
                            </div>
                        </form>
                        <?php include("db/forum/get-posts.php") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>