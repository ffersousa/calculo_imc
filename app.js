window.onload = () => {
  let button = document.querySelector("#btn");

  //obterDataAtual();
  //addEventListener("load", (event) => {
  //  obterDataAtual();
  //});

  //button.addEventListener("click", calcular_IMC);
};

function verCamposVazios() {
  let texto_Msg = "";
  let isValid = true;

  // Verifica se os campos estão vazios
  if (minhaForm.username.value == "") {
    texto_Msg += "Campo utilizador vazio. ";
    isValid = false;
  }
  if (minhaForm.data.value == "") {
    texto_Msg += "Campo data vazio. ";
    isValid = false;
  }

  if (minhaForm.altura.value == "") {
    texto_Msg += "Campo altura vazio. ";
    isValid = false;
  }

  if (minhaForm.peso.value == "") {
    texto_Msg += "Campo peso vazio. ";
    isValid = false;
  }

  if (!isValid) {
    // Verifica se todos os campos são válidos
    alert(texto_Msg);
  }
  calcular_IMC();
}

// Function para calcular  imc
function calcular_IMC() {
  //alert("Teste na função calcular IMC");
  //let altura = number(minhaForm.altura.value); // convert texto para numero
  //let peso = number(minhaForm.peso.value);
  //let peso = parseInt(document.querySelector("#peso").value);

  // Get the input element
  var inputPeso = document.getElementById("peso");
  // Get the value of the input
  var peso = inputPeso.value;

  // Get the input element
  var inputAltura = document.getElementById("altura");
  // Get the value of the input
  var altura = inputAltura.value;
  // Display the value
  console.log(peso);

  // Ajuste para 2 casas decimais
  let imc = (peso / ((altura * altura) / 10000)).toFixed(2);
  // verificar as condições do imc
  let avaliacao = "";
  if (imc < 18.6) {
    avaliacao = " abaixo do peso recomendado. ";
  } else if (imc >= 18.6 && imc < 24.9) avaliacao = " normal :";
  else avaliacao = " acima do peso recomendado ";
  alert("IMC: " + imc + " - Avaliacao:" + avaliacao);
}

// Obter a data currente
function obterDataAtual() {
  console.log("Olá Fernando");
  const date = new Date();

  let dia = date.getDate();
  let mes = date.getMonth() + 1;
  let ano = date.getFullYear();

  // This arrangement can be altered based on how we want the date's format to appear.
  // let currentDate = `${day}-${month}-${year}`;
  document.getElementById("username").innerHTML = "I have changed!";
  let currentData = `${ano}-${mes}-${dia}`;
  let data = document.querySelector("data");
  data.innerHTML = currentData;
  console.log(currentData); // "17-6-2022"
}
