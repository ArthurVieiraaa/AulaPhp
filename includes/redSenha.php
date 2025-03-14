<?php
include('conexao.php');
if (isset($_POST['usuario']) && isset($_POST['senha']) && isset($_POST['confirmar_senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    if ($senha === $confirmar_senha) {
        $sql_code = "UPDATE usuarios SET senha = '$senha' WHERE usuario = '$usuario'";
        if ($mysqli->query($sql_code)) {
            echo "Senha atualizada com sucesso!";
        } else {
            echo "Erro ao atualizar a senha. Tente novamente.";
        }
    } else {
        echo "As senhas não coincidem.";
    }
}
?>


<div class="senha">
    <div class="formulario-senha">
        <h1>Redefinir Senha:</h1>
        <form method="POST">
            <label for="nome">Usuário:</label>
            <input type="text" id="usuario" name="usuario" placeholder="Digite seu Nome..." required>
            <label for="password">Nova Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua Nova Senha..." required>
            <label for="password">Confirme Senha:</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirme sua Senha..." required>
            <button type="submit">Alterar Senha</button>
            <div class="senha-btn">
                <a href="index.php">Fazer Login</a>
            </div>
        </form>
    </div>
</div>