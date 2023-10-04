<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Despesas - Pesquisar Contas </title>
    <link rel="stylesheet" href="estilos_menu.css">
</head>
<body>
<?php 
     require "menu.php";
     echo "<h3>Listagem das Contas</h3>";
     require "conexao.php";
     $sql="SELECT * FROM contas ORDER BY titular";
     $resultado=mysqli_query($conexao, $sql) or die(mysqli_erro($conexao));
     echo "<table border='1' width='1000' aling='center'>";
     echo "<tr>";
        echo "<th width='100' aling='right'>Código</th>";
        echo "<th width='300' aling='left'>Titular</th>";
        echo "<th width='100' aling='left'>CPF</th>";
        echo "<th width='250' aling='left'>Saldo</th>";
        echo "<th width='50' aling='left'>Editar</th>";

     echo "</tr>";

     while($linha=mysqli_fetch_array($resultado)) {

        $codigo = $linha["codigo"];
        $titular = $linha["titular"];
        $cpf = $linha["cpf"];
        $saldo = $linha["saldo"];
        echo "<table border='1' width='1000' align='center'>";
        echo "<tr>";
           echo "<th width='100' aling='right'>$codigo</th>";
           echo "<th width='300' aling='left'>$titular</th>";
           echo "<th width='100' aling='left'>$cpf</th>";
           echo "<th width='250' aling='left'>$saldo</th>";
           echo "<th width='50'><a fref='contas_editar.php?codigo=$codigo'>Editar</th>";
   
   
        echo "</tr>";
     }
     echo"</table>";
     ?>
    
</body>
</html>