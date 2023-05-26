<?php
    include("../conexao.php");

    if (!isset($_GET['id'])) {
        die("ID do usuário não fornecido.");
    }

    if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

        if (!empty($id) && !empty($nome) && !empty($telefone) && !empty($email)) {
            $sql = "UPDATE usuario SET nome = :nome, telefone = :telefone, email = :email WHERE id = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":email", $email);
            $stmt->execute();

            header("location: Telalistagem.php");
            exit();
        } else {
            die("Os campos do formulário não podem estar vazios!");
        }
    } else {
        die("Dados do formulário não foram fornecidos!");
    }
?>
