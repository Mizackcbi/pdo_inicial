<?php
include('teste.php');
$conexao = conectar_bd();
$sql2 = "select * from t_cliente";
$resultado = $conexao->query($sql2);
$linhas = $resultado->fetchAll();
?>
<div>
    <?php foreach($linhas as $dado)
        {echo $dado['NOME'],"<br>";} 
    ?>
</div>