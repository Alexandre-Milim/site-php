<?php
include("../conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];

    if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($cidade)) {
        $sql = "INSERT INTO usuario (nome, email, telefone, cidade) VALUES (:nome, :email, :telefone, :cidade)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':telefone', $telefone);
        $stmt->bindValue(':cidade', $cidade);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Usuário registrado com sucesso.";
        } else {
            echo "Falha ao registrar o usuário.";
        }
    } else {
        echo "Os campos do formulário não podem estar vazios!";
    }
}
?>

<form action="" method="POST">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" placeholder="Informe seu nome:" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Informe seu email:" required>

    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" id="telefone" placeholder="Informe seu telefone:" required>

    <label for="cidade">Cidade</label>
    <input type="text" name="cidade" id="cidade" placeholder="Informe sua cidade:" required>

    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>
</form>
