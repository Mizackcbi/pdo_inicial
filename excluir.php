<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir dados</title>
</head>
<body>
    excluir dados
    <form id="formulario" action="#" method="post">
        <input type="text" placeholder="Nome" id="nome" name="nome">
        <input type="submit" name="botao" id="botao" value="enviar">
    </form>
    <?php
    if (isset($_POST["botao"])) {
    $nome = $_POST['nome'];
    include('teste.php');
    $conexao = conectar_bd();
    $sql = 'delete from t_cliente where nome = ?';
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$nome]);}
    ?>
</body>
</html>