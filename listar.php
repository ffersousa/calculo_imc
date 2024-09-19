<?php
include("menu.php");
include("./utilsData.php");
include('./database/mysqli.php');
?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Escola Website - Mostrar dados</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel='stylesheet' type='text/css' media='screen' href='./src/css/main.css'>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="imc.css" />
    <script src="./app.js"></script>
</head>

<body>
    <div class="col-md-6 offset-md-3 text-center bg-light  border-secondary mt-5 col-sm-12">
        <h3 class=" cabecalho mt-5"> Registos de IMC</h3>
        <table id=" dtBasicExample" class="table">
            <tr>
                <th scope="col">
                    <h5> Nome <h5>
                </th>

                <th scope="col">
                    <h5> Data<h5>
                </th>
                <th scope="col">
                    <h5> Altura <h5>
                </th>
                <th scope="col">
                    <h5> Peso <h5>
                </th>
                <th scope="col">
                    <h5> Imc <h5>
                </th>

                <?php
				
				$query = "SELECT * from leituras order by nome";
				$sql = mysqli_query($conn, $query);
				$leituras = mysqli_fetch_all($sql, MYSQLI_ASSOC);

				foreach ($leituras  as $leitura) {
				
					
				?>
            <tr>
                <td> <?= $leitura['nome'] ?></td>

                <td> <?= $leitura['dia'] ?></td>
                <td>
                    <?= $leitura['altura']?>
                </td>
                <td> <?= $leitura['peso'] ?></td>

                <td>


                    <?php // calculo IMC
                    $imc  = $leitura['altura'] * ($leitura['altura']/10000 );
                    $imc = $leitura['peso'] / $imc;
                    echo number_format($imc,2);
                     ?>

                </td>


            </tr>
            <?php
					}
			?>
        </table>
    </div>


</body>

</html>