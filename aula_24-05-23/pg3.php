<?php
$estudante=array(
    "ra"   =>123456,
    "nome" =>"Jubileu",
    "curso"=>"TADS",
    "semestre"=>3
);
echo "<pre>";print_r($estudante);echo "</pre><hr>";
foreach($estudante as $pos=>$valor){
    //echo "$pos: <b>$valor</b><br>";
    echo "$valor<br>";
}
?>