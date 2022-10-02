<main class="container border my-2 border-2 rounded shadow">
    <br>
    <h2>Configurações da Conta</h2>
    <br>
    <h3><?php echo $_SESSION['username'] ?></h3>
    <br>
    <?php include('db/users/getUserById.php') ?>
    <div class="row">
        <div class="col">
            <form action="db/users/uploadImage.php" method="post" enctype="multipart/form-data">
                <input type="text" name="form-id" id="form-id" value="<?= $row['id'] ?>" readonly hidden>
                <?php if ($row['photo'] != "") {
                ?><img src="Img/users/<?= $row['photo'] ?>" id="form-img" alt=""><?php
                                                                                } else {
                                                                                    ?><img src="Img/users/people.png" id="form-img" alt=""><?php
                                                                                                                                        } ?>
                <input type="file" name="form-img" id="account_btn_select_img"><br><br>
                <input class="btn btn-primary" type="submit" name="submit" id="account_btn_save_image" value="Upload">
            </form>
            <br>
            <form action="db/users/updateUser.php" method="post">
                <div class="mb-3">
                    <label for="form-username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="form-username" name="form-username" value="<?= $row['username'] ?>" required readonly>
                </div>
                <div class="mb-3">
                    <label for="form-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="form-password" name="form-password" value="*********" readonly>
                </div>
                <div class="mb-3">
                    <label for="form-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="form-email" name="form-email" value="<?= $row['email'] ?>" required readonly>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <button id="account_btn_edit" type="button" class="btn btn-primary" onclick="account_edit()">Edit</button>
                            <button id="account_btn_cancel" type="button" class="btn btn-danger" onclick="account_cancel()">Cancel</button>
                            <button id="account_btn_save" type="submit" class="btn btn-success">Save Changes</button>
                        </div>
                        <div class="col text-end">
                            <button id="account_btn_delete" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete Account</button>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Modal -->
            <form action="db/users/deleteOwnAccount.php" method="get">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Apagar conta</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Tem a certeza que quer apagar a sua conta?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>