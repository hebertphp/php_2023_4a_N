<?php
$num[0]=10;
$num[1]=30;
$num[2]=2023;
echo $num[0]."<br>";
echo $num[1]."<br>";
echo $num[2]."<br>";
echo "<hr>";
//         0    1    2    3            
$uf=array("SP","RJ","ES","MG");
echo $uf[1];
echo "<hr>";
$dados=array(10,"oi",7.5);
echo $dados[0]."<br>";
echo $dados[1]."<br>";
echo $dados[2]."<hr>";
//           0 1 2 3  4  5
$dados=array(1,2,3,10,30,90);
$dados[0]="Mudou";
$dados[5]+=100;  
echo "<pre>";print_r($dados);echo "</pre><hr>";
$estudante=array(4231,"Belarmina",9.5);
$estudante["ra"]=4231;
$estudante["nome"]="Belarmina";
$estudante["nota"]=9.5;
echo "<pre>";print_r($estudante);echo "</pre><hr>";
?>