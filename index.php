<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formulario" action="users.php" method="post">
        <input type="text" placeholder="Nome" id="nome" name="nome">
        <input type="text" placeholder="Email" id="email" name="email">
        <input type="text" placeholder="Cidade" id="cidade" name="cidade">
        <input type="submit" name="botao" id="botao" value="enviar">
    </form>
</body>
</html>
<?php

// var_dump($conexao);

// if (isset($_POST["botao"])) {
// $nome = $_POST['nome'];
// $email = $_POST['email'];
// $cidade = $_POST['cidade'];
// $sql = 'INSERT INTO T_CLIENTE(nome,email,cidade) VALUES(?,?,?)';
// $stmt = $conexao->prepare($sql);
// $stmt->execute([$nome,$email,$cidade]);}

// $codigo = 7;
// $sql = 'delete from t_cliente where codigo = ?';
// $stmt = $conexao->prepare($sql);
// $stmt->execute([$codigo]);

// $email = 'claudio1@gmail.com';
// $codigo = 6;
// $sql = 'UPDATE t_cliente SET email=? where codigo=?';
// $stmt = $conexao->prepare($sql);
// $stmt->execute([$email,$codigo]); 

// $sql2 = "select * from t_cliente";
// $resultado = $conexao->query($sql2);
// $linhas = $resultado->fetchAll();
// foreach($linhas as $dado){
//     echo $dado['NOME'],"\t",$dado['EMAIL'],"\t",$dado['CIDADE'], '<br>';
// }
// print_r($linhas);
?>