<main class="container border my-2 border-2 rounded shadow">
  <div class="container w-50">
    <div class="col text-center">
    </div>

    <?php if (isset($_GET['id'])) {
      include('db/news/select-news-by-id.php');
    } ?>
    <?php if (isset($_GET['id'])) { ?>
      <form action="db/news/update-news.php" method="post">
      <?php } else { ?>
        <form action="db/news/insert-news.php" method="post">
        <?php } ?>

        <form action="" method="post">
          <input type="number" class="form-control" id="form-id" name="form-id" value="<?php if (isset($_GET['id'])) echo $row['id']; ?>" readonly hidden>
          <div class="form-group">
            <label for="form-news">Insira uma nova notícia:</label>
            <textarea class="form-control" id="form-news" rows="3" name="form-news" autocomplete="form-news" placeholder="Escreva uma notícia" required><?php if (isset($_GET['id'])) echo $row['text']; ?></textarea>
          </div>
          <br>
          <div>
            <button type="submit" class="btn btn-dark">Enviar</button>
          </div>
          <div class="back-intro">
            <a href="index.php?p=admin-news">Voltar</a>
          </div>
  </div>
  </form>
  <br>