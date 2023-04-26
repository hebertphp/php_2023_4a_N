<?php
$destino="New York";//Nova York//NYork//NY
switch ($destino) {
    case "São Paulo"://SP //s paulo
        echo 'Seja bem vindo a cidade que nunca para!';
        break;
    case "New York":
        echo "Seja bem vindo a Big Apple!";
        break;
    case "Paris":
        echo 'Seja bem vindo a cidade Luz!';
        break;
    default://else
        echo 'Não encontramos seu destino!';
        break;
}
?>