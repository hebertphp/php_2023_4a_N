<?php
include "conecta.php";
$sql="
insert into user 
    values (null,'hba1',md5('123456'),'hba@test.com',now(),'Funcionou?')
";
$query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "Insert OK!";
mysqli_close($conn);
?>