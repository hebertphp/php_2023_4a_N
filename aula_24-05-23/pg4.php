UF<select name="uf">

<?php
$uf=array("SP","RJ","MG","ES","RS","MT","TO","AM");
sort($uf);
foreach($uf as $x){
    echo "<option value='SP'>SP</option>";
}
?>
</select><br>