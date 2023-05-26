<?php
    include("../config/cabecalho.php");
    include("conexao.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "INSERT INTO usuario (nome, email) VALUES (:nome, :email)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Registrado com sucesso";
            header("Location: Telalistagem.php");
            exit();
        } else {
            echo "Falha ao registrar usuário";
        }
    }
?>

<form action="" method="POST">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" placeholder="Informe seu nome:" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Informe seu email:" required>

    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>
</form>

<?php
    include("../config/rodape.php");
?>
