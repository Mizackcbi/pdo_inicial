<?php
$conexao = new PDO("firebird:dbname=127.0.0.1:C:\DADOS\DADOS.FDB","SYSDBA","masterkey");
// var_dump($conexao);

// $nome = 'claudio';
// $email = 'claudio@gmail.com';
// $cidade = 'salvador';
// $sql = 'INSERT INTO T_CLIENTE(nome,email,cidade) VALUES(?,?,?)';
// $stmt = $conexao->prepare($sql);
// $stmt->execute([$nome,$email,$cidade]);

// $codigo = 7;
// $sql = 'delete from t_cliente where codigo = ?';
// $stmt = $conexao->prepare($sql);
// $stmt->execute([$codigo]);

// $email = 'claudio1@gmail.com';
// $codigo = 6;
// $sql = 'UPDATE t_cliente SET email=? where codigo=?';
// $stmt = $conexao->prepare($sql);
// $stmt->execute([$email,$codigo]);

$sql = "select * from t_cliente";
$resultado = $conexao->query($sql);
$linhas = $resultado->fetchAll();
foreach($linhas as $dado){
    echo $dado['NOME'],"\t",$dado['EMAIL'],"\t",$dado['CIDADE'], '<br>';
}
// print_r($linhas);
?>