<?php 
include('teste.php');
$conexao = conectar_bd();

if (isset($_POST["botao"])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $sql = 'INSERT INTO T_CLIENTE(nome,email,cidade) VALUES(?,?,?)';
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$nome,$email,$cidade]);
}
    
$sql2 = "select * from t_cliente";
$resultado = $conexao->query($sql2);
$linhas = $resultado->fetchAll();
echo '<table>';

echo '<tr><td>Código</td><td>Nome</td><td>Email</td><td>Cidade</td></tr>';
foreach($linhas as $dado){
    echo "<tr>";
    echo 
    "<td>",$dado['CODIGO'],
    "</td>",
    "<td>",$dado['NOME'],
    "</td>",
    "<td>",
    $dado['EMAIL'],
    "</td>",
    "<td>",
    $dado['CIDADE'],
    "</td>";
    echo "</tr>";
}
echo '</table>';
?>