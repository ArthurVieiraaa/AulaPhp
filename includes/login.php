<?php
include('conexao.php');
if(isset($_POST['usuario']) && isset($_POST['senha'])) {
   if(strlen($_POST['usuario']) == 0) {
       echo "Usuario não informado";
   } else if(strlen($_POST['senha']) == 0) {
       echo "Preencha sua senha";
   } else {
       $usuario = $mysqli->real_escape_string($_POST['usuario']);
       $senha = $mysqli->real_escape_string($_POST['senha']);
       $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
       $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
       $quantidade = $sql_query->num_rows;
       if($quantidade == 1) {
           $usuario = $sql_query->fetch_assoc();
           if(!isset($_SESSION)) {
               session_start();
           }
           $_SESSION['id'] = $usuario['id'];
           $_SESSION['nome'] = $usuario['nome'];
           header("Location: painel.php");
       } else {
           echo "Falha ao logar! E-mail ou senha incorretos";
       }
   }
}
?>

<div class="login">
    <div class="formulario">
        <h1>Login:</h1>
            <form action="" method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" placeholder="Usuário">
            <label for="password">Senha:</label>
            <input type="password" name="senha" placeholder="Senha">
            <button type="submit">Entrar</button>
            <div class="reset-senha">
                <a href="senha.php">Esqueceu a Senha?</a>
                <a href="senha.php">Redefinir Senha</a>
            </div>
        </form>
    </div>
</div>