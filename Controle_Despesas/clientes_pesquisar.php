<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Despesas - Pesquisar Clientes </title>
    <link rel="stylesheet" href="estilos_menu.css">
</head>
<body>

<?php 
     require "menu.php";
     echo "<h3>Listagem dos Clientes</h3>";
     require "conexao.php";
     $sql="SELECT * FROM clientes ORDER BY nome";
     $resultado=mysqli_query($conexao, $sql) or die(mysqli_erro($conexao));
     echo "<table border='1' width='1000' aling='center'>";
     echo "<tr>";
        echo "<th width='100' aling='right'>Código</th>";
        echo "<th width='300' aling='left'>Nome</th>";
        echo "<th width='100' aling='left'>CPF</th>";
        echo "<th width='250' aling='left'>E-mail</th>";
        echo "<th width='50' aling='left'>Editar</th>";

     echo "</tr>";
     while($linha=mysqli_fetch_array($resultado)) {

        $codigo = $linha["codigo"];
        $nome = $linha["nome"];
        $cpf = $linha["cpf"];
        $email = $linha["email"];
     
        echo "<table border='1' width='1000' aling='center'>";
     echo "<tr>";
        echo "<th width='100' aling='right'>$codigo</th>";
        echo "<th width='300' aling='left'>$nome</th>";
        echo "<th width='100' aling='left'>$cpf</th>";
        echo "<th width='250' aling='left'>$email</th>";
        echo "<th width='50'><a fref='clientes_editar.php?codigo=$codigo'>Editar</th>";


     echo "</tr>";
     }
     
     
         
     echo"</table>";


?>
    
</body>
</html>