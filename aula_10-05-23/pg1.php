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
$cli["horas"]=120;
$cli["valor_hora"]=15.5;
echo "Cpf: ".$cli["cpf"];
echo "<pre>";print_r($cli);echo "</pre>";
echo "<hr>";
$aluno = array(
            array("TBD","Fulano",123456789),
            array("TRC","Beltrano",234567890),
            array("TADS","Sicrano",345678901) 
            );
      //     0                   1                                          2  3
$arr=array(array(1,2,3,4,"oi"),array("João","Andressa","Pablo","Vinicius"),30,40);
//               0 1 2 3              0       1            2       3
echo $arr[1][1];echo "<hr>";
echo "<pre>";print_r($arr);echo "</pre>";
   
?>