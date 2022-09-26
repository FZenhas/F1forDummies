<main class="container border my-2 border-2 rounded shadow">
    <br>
    <?php
    if (!isset($_GET['search'])) { ?>
        <h1>Pilotos de Fórmula 1 de 2022</h1>
    <?php } else { ?>
        <h1>Resultados da pesquisa</h1>
    <?php } ?>

    <br>
    <section>
        <div class="container">
            <div class="row ">
                <?php
                if (!isset($_GET['search']))
                    include('db/viewDriver.php');
                else
                    include('db/searchDrivers.php');
                ?>

                <?php
                if (!isset($_GET['search'])) { ?>
                    <p>Para saber qual a classificação atual de cada Piloto consulta esta <a href="index.php?p=Classificacao-pilotos"> página.</a></p>
                <?php } ?>
            </div>
        </div>
    </section>