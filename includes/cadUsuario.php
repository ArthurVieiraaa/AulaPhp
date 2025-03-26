<?php
include('conexao.php');
if(isset($_POST['usuario']) && isset($_POST['senha'])) {
    if(strlen($_POST['usuario']) == 0) {
        echo "Usuário não informado";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";;
    } else {
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;

        if($quantidade > 0) {
            echo "Usuário já cadastrado!";
        } else {
            $sql_code = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')";
            
            if($mysqli->query($sql_code)) {
                echo "Cadastro realizado com sucesso!";
                header("Location: index.php");
            } else {
                echo "Erro ao cadastrar. Tente novamente!";
            }
        }
    }
}
?>


<div class="cadusuario">
    <h1>Cadastro de Usuário:</h1>
    <div class="cadusuario-content">
        <form method="POST">
            <label for="nome">Nome do Usuário:</label>
            <input type="text" id="usuario" name="usuario" placeholder="Digite o Nome..." required>
            <label for="senha">Senha do Usuário:</label>
            <input type="password" id="senha" name="senha" placeholder="Digite a Senha..." required>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</div>