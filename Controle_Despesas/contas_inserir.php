<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Despesas</title>
    <link rel="stylesheet" href="estilos_menu.css">
    <link rel="stylesheet" href="estilos_formulario.css">
</head>

<body>
    <?php
    require "menu.php"; // Importa o menu do sistema de Controle de Despesas
    ?>
    <div id="cadastro">
        <h3>CADASTRO DE CONTAS</h3>
        <form name="cadastro" method="post" action="">
            <table>
                <tr>
                    <td><label for="titular">Titular:</label></td>
                    <td><input type="text" name="titular" size="40" maxlength="40" placeholder="Informe o Titular da Conta" required>
                </tr>
                <tr>
                    <td><label for="saldo">Saldo:</label></td>
                    <td><input type="text" name="saldo" size="30" maxlength="30" required>
                </tr>
                <tr>
                    <td><label for="cpf">CPF:</label></td>
                    <td><input type="text" name="cpf" size="14" maxlength="14" required>
                </tr>
                <tr>
                    <td><label for="despesa">Despesas:</label></td>
                    <td><input type="text" name="despesa" size="30" maxlength="30" required>
                </tr>
                      <td colspan="2" align="center">
                        <input type="submit" name="cadastrar" value="Cadastrar">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST["cadastrar"])) {
            $titular           = $_POST["titular"];
            $saldo        = $_POST["saldo"];
            $cpf            = $_POST["cpf"];
            $despesa          = $_POST["despesa"];
            require "conexao.php";
            $sql = "INSERT INTO contas(codigo, titular, saldo, cpf, despesa)";
            $sql .= " VALUES (null, '$titular', '$saldo', '$cpf', '$despesa')";
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type =\"text/javascript\">alert('Conta criada com sucesso!');</script>";
            echo "<p align='center'><a href='home.php'>Voltar</a></p>";
        }
        ?>
    </div>
</body>

</html>