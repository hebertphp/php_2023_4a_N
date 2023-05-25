<?php
$produto=array("Teclado","Monitor","CPU Gamer","Mouse")
?>
<table align="center" width="500" border="1">
    <tr>
          <th>id</th>
          <th>nome</th>  
    </tr>
<?php
foreach ($produto as $pos=>$valor){
    $pos+=1;
    
echo " 
    <tr>
        <td>$pos</td>
        <td>$valor</td>
    </tr>
    ";
}    
?>
</table>    