<?php
include "conecta.php";
$sql="select login, email, data from user";
$result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
$row= mysqli_fetch_array($result, MYSQLI_ASSOC);
echo "<pre>";print_r($row);echo "</pre>";
$row= mysqli_fetch_array($result, MYSQLI_ASSOC);
echo "<pre>";print_r($row);echo "</pre>";
?>
<table border="1" width="500" align="center">
    <tr>
        <th>Login</th><th>email</th><th>data</th>
    </tr>

</table>
<?php
mysqli_free_result($result);
mysqli_close($conn);
?>