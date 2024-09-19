<?php
include("menu.php");
include("./utilsData.php");
include('./database/mysqli.php');
?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <title>IMC - Estatísticas</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="imc.css" />
    <meta charset="UTF-8">
</head>

<body>
    <div class="col-md-6 offset-md-3 text-center bg-light  border-secondary mt-5 col-sm-12">
        <h3 class=" cabecalho mt-5"> Estatísticas</h3>
    </div>
    <div class=" container mt-5">
        <?php
                
			
				// SQl para calcular a média das alturas na base de dados
                $sql = "SELECT AVG(altura) AS alturaMedia FROM leituras";
                $result = $conn->query($sql);
                $row = $result->fetch_row();  
                echo  "Média das alturas: " . $row[0] . " cm";
                echo " <br>";

                // SQl para calcular a média dos pesos na base de dados
                $sql = "SELECT AVG(peso) AS pesoMedio FROM leituras";
                $result = $conn->query($sql);
                $row = $result->fetch_row();  
                echo  "Média dos pesos: " . $row[0]. " Kg";
                 echo " <br>";                

                 // SQl para calcular a maior altura na base de dados
                $sql = "SELECT Max(altura) AS pesoMAX FROM leituras";
                $result = $conn->query($sql);
                $row = $result->fetch_row();  
                echo  "Maior altura: " . $row[0]. " cm";
                echo " <br>";                

                 // SQl para calcular a menor altura na base de dados
                $sql = "SELECT MIN(altura) AS pesoMAX FROM leituras";
                $result = $conn->query($sql);
                $row = $result->fetch_row();  
                echo  "Menor altura: " . $row[0]. " cm";
                 echo " <br>";                

                 
                // SQl para calcular o peso maior na base de dados
                $sql = "SELECT Max(peso) AS pesoMAX FROM leituras";
                $result = $conn->query($sql);
                $row = $result->fetch_row();  
                echo  "Maior peso: " . $row[0]. " Kg";

                 echo " <br>";                
                // SQl para calcular a peso menor na base de dados
                $sql = "SELECT MIN(peso) AS pesoMAX FROM leituras";
                $result = $conn->query($sql);
                $row = $result->fetch_row();  
                echo  "Menor peso: " . $row[0]. " Kg";
              

                // Free result set
                $result -> free_result();
                $mysqli -> close();

                
				//$sql = mysqli_query($conn, $query);
				//$users = mysqli_fetch_all($sql, MYSQLI_ASSOC)
		?>
    </div>


</body>

</html>