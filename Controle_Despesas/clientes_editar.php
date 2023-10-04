<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clintes | Editar </title>
    <link rel="stylesheet" href="estilos_menu.php">
</head>
<body>
    <?php
    require "menu.php";
    echo "<h3>Editar Cadastro de Clientes</h3>";
    require "conexao.php";
    $codigo = $_REQUEST["codigo"];
    $sql="SELECT * FROM clientes WHERE codigo='$codigo'";
    $resultado=mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $linha=mysqli_fetch_array($resultado);
    $codigo = $linha["codigo"];
    $nome = $linha["nome"];
    $cidade = $linha["cidade"];
    $cpf = $linha["cpf"];
    $email = $linha["email"];
    $contato = $linha["contato"];
    
    echo "<form name='cadastro' method='post' action=''>";
    echo "<table border='1' aling='center'>";
    echo"<tr>";
    echo"<td><label for='codigo'>Código:</label></td>";
    echo"<td><input type='text' name='codigo' value='$codigo'></td>";
    echo"</tr>";
    echo "</table>";
    echo "</form>";

    echo "<form name='cadastro' method='post' action=''>";
    echo "<table border='1' aling='center'>";
    echo"<tr>";
    echo"<td><label for='nome'>Nome:</label></td>";
    echo"<td><input type='text' name='nome' value='$nome'></td>";
    echo"</tr>";
    echo "</table>";
    echo "</form>";

    echo "<form name='cadastro' method='post' action=''>";
    echo "<table border='1' aling='center'>";
    echo"<tr>";
    echo"<td><label for='cidade'>Cidade:</label></td>";
    echo"<td><input type='text' name='cidade' value='$cidade'></td>";
    echo"</tr>";
    echo "</table>";
    echo "</form>";

    echo "<form name='cadastro' method='post' action=''>";
    echo "<table border='1' aling='center'>";
    echo"<tr>";
    echo"<td><label for='cpf'>Cpf:</label></td>";
    echo"<td><input type='text' name='cpf' value='$cpf'></td>";
    echo"</tr>";
    echo "</table>";
    echo "</form>";

    echo "<form name='cadastro' method='post' action=''>";
    echo "<table border='1' aling='center'>";
    echo"<tr>";
    echo"<td><label for='email'>E-mail:</label></td>";
    echo"<td><input type='text' name='email' value='$email'></td>";
    echo"</tr>";
    echo "</table>";
    echo "</form>";

    echo "<form name='cadastro' method='post' action=''>";
    echo "<table border='1' aling='center'>";
    echo"<tr>";
    echo"<td><label for='contato'>Contato :</label></td>";
    echo"<td><input type='text' name='contato' value='$contato'></td>";
    echo"</tr>";
    echo "</table>";
    echo "</form>";

    echo "<form name='cadastro' method='post' action=''>";
    echo "<table border='1' aling='center'>";
    echo"<tr>";
    echo"<td><td colspan='2' align='center></td>";
    echo"<input type='submit' name='cadastrar' value='Cadastrar'>";
    echo"</td>";
    echo"</tr>";
    echo "</table>";
    echo "</form>";
    

    if (isset($_POST["cadastrar"])) {
        $nome           = $_POST["nome"];
        $cidade         = $_POST["cidade"];
        $cpf            = $_POST["cpf"];
        $email          = $_POST["email"];
        $contato        = $_POST["contato"];

        require "conexao.php";
            $sql = "INSERT INTO clientes(codigo, nome, cidade, cpf, email, contato, DataNascimento)";
            $sql .= " VALUES (null, '$nome', '$cidade', '$cpf', '$email', '$contato', '$DataNascimento')";
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type =\"text/javascript\">alert('Cliente cadastrado com sucesso!');</script>";
            echo "<p align='center'><a href='home.php'>Voltar</a></p>";
    }


    
    
    ?>

    
</body>
</html>