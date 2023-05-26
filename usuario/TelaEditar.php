<?php
include("../config/cabecalho.php");
include("../conexao.php");

if (!isset($_GET['id'])) {
    die("ID do usuário inválido");
}

$id = $_GET['id'];

$sql = "SELECT * FROM usuario WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(":id", $id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    die("Usuário não encontrado.");
}
?>

<div class="container">
    <h1>Atualizar seus dados</h1>
    <form action="<?php echo "atualizar.php?id={$id}" ?>" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Informe seu nome" required value="<?php echo $row['nome'] ?>">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Informe o seu email" required value="<?php echo $row['email'] ?>">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" placeholder="Informe o seu telefone" required value="<?php echo $row['telefone'] ?>">

        <button type="submit">Atualizar</button>
    </form>
</div>

<?php
include("../config/rodape.php");
?>
