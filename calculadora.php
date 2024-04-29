<?php
header("Content-type: text/html; charset=utf8");
//vaiaves
$num1 = 0;
$num2 = 0;
$msg = "";

//calculos
if (isset($_POST["num1"]) && !empty($_POST["num1"]) && isset($_POST["num2"]) && !empty($_POST["num2"])){

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if (isset($_POST["somar"])){
        $msg = "A soma dos dois números é: {$num1} + {$num2} = ".($num1 + $num2);
    }
    else if (isset($_POST["subtrair"])){
        $msg = "A subtração dos dois números é: {$num1} - {$num2} = ".($num1 - $num2);
    }
    else if (isset($_POST["multiplicar"])){
        $msg = "A multiplicação dos dois números é: {$num1} * {$num2} = ".($num1 * $num2);
    }
    else if (isset($_POST["dividir"])){
        $msg = "A divisão dos dois números é: {$num1} / {$num2} = ".number_format(($num1 / $num2), 2);
    }
    else {
        $msg = "Favor escolher uma operação!";
    }
}
else {
    header("location:index.html");
}

//saida
echo "<h1> Calculadora </h1>";
echo "<h3>{$msg}</h3>";
echo "<a href='index.html'> Voltar </a> ";
?>