<?php
// Conex�o ao banco
$link = mysql_connect('localhost','root','');
$conexao = mysql_select_db('myrouter',$link);
if($conexao){
    $sql = "SELECT * FROM empresa";
    $consulta = mysql_query($sql);

    $registro = mysql_fetch_assoc($consulta);

    echo '<td>'.$registro["avisopermanente"].'</td>';

}

?>