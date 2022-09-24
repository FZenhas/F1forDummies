<main class="container border my-2 border-2 rounded shadow">
    <br>
    <h1>Pilotos de Fórmula 1 de 2022</h1>
    <br>
    <section>
        <div class="container">
            <div class="row ">


    <?php
    if(!isset($_GET['search']))
        include('db/viewDriver.php');
    else
        include('db/searchDrivers.php');
    ?>
                <p>Para saber qual a classificação atual de cada Piloto consulta esta <a href="index.php?p=Classificacao-pilotos"> página.</a></p>
            </div>
        </div>
    </section>
