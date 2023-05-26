<?php
    include("../config/cabecalho.php");
?>


<div class="container">
    <form action="" method="POST">
        <label for="login">Login</label>
        <input type="text" name="login" required placeholder="Informe seu login">

        <label for="senha">Senha</label>
        <input type="password" name="senha" required placeholder="Informe sua senha">

        <button type="submit">Logar</button>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            require("../usuario/conexao.php");

            $login = $_POST["login"];
            $senha = $_POST["senha"];

            $sql = "SELECT * FROM usuario 
                WHERE login = :login and senha = :senha";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":login", $login);
            $stmt->bindValue(":senha", $senha);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                echo "Pode logar";
            }else {
                echo "Não pode logar";
            }
        }
    ?>

<?php
    include("../config/rodape.php");
?>
