<main class="container border my-2 border-2 rounded shadow">
    <br>
    <h1>Classificação dos Pilotos 2022</h1>
    <br>
    <div class="container w-50">
        <?php include('db/grand-prix/last-race-gp.php'); ?>
    </div>
    <br>
    <?php include('db/drivers/viewDriversRanking.php'); ?>
    <br>

    <p>Para saber mais sobre cada Piloto consulte esta <a href="index.php?p=drivers"> página.</a></p>