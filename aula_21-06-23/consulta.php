<?php
include "conecta.php";
$sql="select * from user";

$result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
$colunas=mysqli_fetch_fields($result);
//$col=mysql_field_name($result, 0);

//echo "<pre>";print_r($colunas);echo "</pre>";
//$row= mysqli_fetch_array($result, MYSQLI_ASSOC);
//echo "<pre>";print_r($row);echo "</pre>";
//$row= mysqli_fetch_array($result, MYSQLI_ASSOC);
//$row= mysqli_fetch_array($result, MYSQLI_ASSOC);
//echo "<pre>";print_r($row);echo "</pre>";
?>
<table border="1" width="500" align="center">
    <tr>
        <?php
        while ($fieldinfo = mysqli_fetch_field($result)) {
            echo "<th>".$fieldinfo -> name."</th>";
        
          }
        ?>
    </tr>
    <?php
    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
        /*
        echo "
        <tr>
            <td>".$row["login"]."</td><td>".$row["email"]."</td><td>".$row["data"]."</td>
        </tr> ";
        */
        echo "<tr>";
        foreach ($row as $pos=>$valor){
            echo "<td>$valor</td>";
        }
        echo "</tr>";

    }
    ?>
</table>
<?php
mysqli_free_result($result);
mysqli_close($conn);
?>