<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>POO - Projeto1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<h1>Lista de Clientes</h1>
<?php
require_once "Cliente.php";

$clientes = array
(
    $cli1 = new Cliente("João","masculino","12312312321","R. A nº 23","01/01/1970"),
    $cli2 = new Cliente("Maria","feminino","18927825654","R. Z nº 1023","31/01/1980"),
    $cli3 = new Cliente("Joana","feminino","98726739832","R. 12 nº 483","01/04/1991"),
    $cli4 = new Cliente("José","masculino","87226737628","AV. K nº 1234","31/12/1968"),
    $cli5 = new Cliente("Mariana","feminino","19827635467","R. X nº 81","12/05/1989"),
    $cli6 = new Cliente("Josefina","feminino","29582947812","R. XYZ nº 585","17/10/1983"),
    $cli7 = new Cliente("Sebastião","masculino","19192828377","R. ASDF nº 789","01/02/1977"),
    $cli8 = new Cliente("Elvis","masculino","65748392011","R. Brazil nº 435","10/07/1975"),
    $cli9 = new Cliente("Hebe","feminino","38293847564","R. SBT nº 190","21/08/1910"),
    $cli0 = new Cliente("Celi","feminino","10191817161","R. Z nº 1100","11/11/1991"),
);

//Listar

?>

</body>
</html>
