<?php
include "conecta.php";
//echo "<pre>";print_r($_POST);
$login=$_POST["login"];
$senha=$_POST["senha"];//
$email=$_POST["email"];
$sql="
insert into user values (null,'$login', md5('$senha'), '$email', now(), null)
";
//echo $sql;
$query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "Insert OK!";
mysqli_close($conn);
?>