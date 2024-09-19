<?php
include("./menu.php");
include("./utilsData.php");
include('./database/mysqli.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Calcular IMC</title>
    <link rel="stylesheet" href="imc.css" />
    <script src="./app.js"></script>
</head>

<body>

    <!-- Pedir ao utilizador a altura e o peso-->
    <!-- site responsivo com bootstrap -->
    <div class="col-md-6 offset-md-1 text-center bg-light  border-secondary mt-3 ">
        <h3 class=" cabecalho mt-5"> Calculadora IMC </h3>
        <form name="minhaForm" autocomplete="on" action="index.php" method="post">

            <div class="form-row ">
                <div class="col-md-12">
                    <input type="text" autocomplete="Dado-nome" class="form-control mt-3" id="username" name="username"
                        required placeholder="Utilizador">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <input type="date" class="form-control mt-3" id="data" name="dia" required placeholder="data">
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-12">
                    <input type="number" class="form-control mt-3" id="altura" name="altura" placeholder="Altura (cm)"
                        required>
                </div>
            </div>
            <div class="form-group row">

                <div class="col-md-12">
                    <input type="number" class="form-control mt-3" id="peso" name="peso" required
                        placeholder="Peso(Kg)">
                </div>
            </div>


            <button type="submit" id="btn" class="btn btn-success mt-3 mb-3" onclick="verCamposVazios()">Calcular
            </button>

        </form>

    </div>



    <div>
        <p class="resultado" id="resultado"></p>
    </div>
</body>

</html>
<?php
if ($_POST){ // Se existir um post, entra!
   
	$username = mysqli_real_escape_string($conn, $_POST['username']); // mysqli_real_escape_string é paraproteger a base de dados com SQL injection 
	$dia = mysqli_real_escape_string($conn, $_POST['dia']);
    $altura = mysqli_real_escape_string($conn, $_POST['altura']);
    $peso = mysqli_real_escape_string($conn, $_POST['peso']);

    	 
	$sql = "INSERT INTO leituras (nome, dia, altura, peso) VALUES ('$username','$dia,', $altura, $peso)";
	if (mysqli_query($conn, $sql)) {
		//echo "Novo registo adicionado com sucesso!";
	 } else {
		echo "Erro: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	
}