<?php
echo "<h1>Receber os dados</h1>";

$matric=$_POST["matric"];
$nome=$_POST["nome"];
$telefone=$_POST["telefone"];
$endereco=$_POST["endereco"];
$uf=$_POST["uf"];

echo "Matrícula: $matric<br>Nome: $nome<br>";
echo "Telefone: $telefone<br>Endereço: $endereco<br>";
echo "UF: $uf<hr>";

$sql ="
insert into aluno(matric,nome,telefone,endereco,uf) 
   values ($matric,'$nome','$telefone','$endereco','$uf')";

echo $sql;   
?><hr>
<a href="form.html">form</a><br>