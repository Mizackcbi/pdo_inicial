<?php 
$conexao = new PDO("firebird:dbname=127.0.0.1:C:\DADOS\DADOS.FDB","SYSDBA","masterkey");
if (isset($_POST["botao"])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $sql = 'INSERT INTO T_CLIENTE(nome,email,cidade) VALUES(?,?,?)';
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$nome,$email,$cidade]);}
    
$sql2 = "select * from t_cliente";
$resultado = $conexao->query($sql2);
$linhas = $resultado->fetchAll();
foreach($linhas as $dado){
    echo $dado['NOME'],"\t",$dado['EMAIL'],"\t",$dado['CIDADE'], '<br>';
}
?>