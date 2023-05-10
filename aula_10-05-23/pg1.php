<?php
$u="SP";
$u="RJ";
//         0    1    2    3    4 
$uf=array("SP","RJ","TO","SC","AM");
echo $uf[1];
echo "<hr>";
echo "<pre>";print_r($uf);echo "</pre>";
echo "<hr>";
$cl=array("Adalbertino","123123128-01","adalbert@teste.com");
echo "Cpf: ".$cl[1];
echo "<hr>";
$cli["nome"]="Adalbertino";
$cli["cpf"]="123123128-01";
$cli["email"]="adalbert@teste.com";
echo "Cpf: ".$cli["cpf"];
echo "<pre>";print_r($cli);echo "</pre>";
?>