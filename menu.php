<?php 
		      error_reporting(0); // Não mostra  avisos.		     
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <title> IMC </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    </script>
    <link rel='stylesheet' type='text/css' media='screen' href='./src/main.css'>
</head>


<html>

<body>

    <header>


        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">IMC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Calcular</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./listar.php">Listagem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="estatisticas.php">Estatisticas</a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>






    </header>
    <section>


    </section>

    <?php
        require_once __DIR__ . "/utils/footer.php";
    ?>
</body>

</html>