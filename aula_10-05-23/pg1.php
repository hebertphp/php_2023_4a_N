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
            array("TADS","Sicrano",345678901),
            array("TJD","Astrogildo",7890) 
            );
$arr=array(
            array(1,2,3,4,"oi"),
            array("João","Andressa","Pablo","Vinicius"),
            30,
            40
          );
echo $arr[0][4];echo "<hr>";
echo "<pre>";print_r($arr);echo "</pre>";
echo "<hr>";
echo $aluno[3][2];
echo "<pre>";print_r($aluno);echo "</pre>";
echo "<hr>";
$game=array(
            array("água","submarino","água","água"),
            array("Destroyer","água","hidroavião","água"),
            array("água","água","porta-aviões","água"),
            array("😲","😁","😬","🖼️")
);
echo $game[1][0];echo "<hr>";
echo "O ".$game[0][1]." destruiu o ".$game[2][2];
//O submarino destruiu o porta-aviões
?>