<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida Login - Senha</title>
</head>
<body>
    <h1>Valida Login - Senha</h1>
    <form action="valida_login_senha.php" method="post">
    <pre>
    Login <input type="text" name="login">
    Senha <input type="password" name="senha">
          <input type="submit" value="Enviar!!">
    </pre>
    </form>
</body>
</html>
<?php
/*
Criar um form com dois campos:
    login
    senha
Criar o código PHP para comparar os valores
digitados com as variáveis abaixo:

$login_bd="bete";
$senha_bd="1234";
$login=$_POST["login"];
$senha=$_POST["senha"];

<!-- senha -->
*/

if(count($_POST)==0){ 
    exit(); //sair ou encerrar o código aqui!
}

echo "<hr>";
echo md5("1234");
echo "<hr>";
echo "<br>";
$login_bd="bete";
$senha_bd="81dc9bdb52d04dc20036dbd8313ed055";
$login=$_POST["login"];
$senha=$_POST["senha"];

if($login==$login_bd && $senha==$senha_bd){
    echo "$login, acesso liberado!";
}
else{
    echo "$login, acesso bloqueado!";
}
?>