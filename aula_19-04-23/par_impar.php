<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par-Ímpar</title>
</head>
<body>
    <h1>Par-Ímpar</h1>
    <form method="post" action="par_impar.php">
    Digite um número <input type="number" name="numero">
    <input type="submit" value="Enviar!!">
    </form><hr>  
</body>
</html>
<?php
/*
Elaborar um código PHP para dado um número inteiro, 
verificar se o número é PAR ou ÍMPAR. 
A saída deverá mostrar o número e mostrar PAR ou ÍMPAR,
como mostrado a seguir:

275 - ÍMPAR
28 - PAR
*/
$numero=$_POST["numero"];

echo $numero;
?>