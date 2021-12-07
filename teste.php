<?php
function conectar_bd(){
    $conexao = new PDO("firebird:dbname=127.0.0.1:C:\DADOS\DADOS.FDB","SYSDBA","masterkey");
    return $conexao;
}
?>