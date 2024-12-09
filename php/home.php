<?php
session_start();
include('conexao.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

// Função para recuperar todos os carros
function recuperaCarros() {
    $con = conectaBD();
    if ($con) {
        $sql = "SELECT * FROM carros";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}

$carros = recuperaCarros();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Carros</title>
</head>
<body>
    <h2>Lista de Carros</h2>
    <a href="cadastro.php">Cadastrar Novo Carro</a><br><br>

    <!-- Tabela para listar os carros -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Ano</th>
            <th>Cor</th>
            <th>Placa</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($carros as $carro): ?>
        <tr>
            <td><?php echo $carro['id']; ?></td>
            <td><?php echo $carro['modelo']; ?></td>
            <td><?php echo $carro['marca']; ?></td>
            <td><?php echo $carro['ano']; ?></td>
            <td><?php echo $carro['cor']; ?></td>
            <td><?php echo $carro['placa']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $carro['id']; ?>">Editar</a> | 
                <a href="deletar.php?id=<?php echo $carro['id']; ?>">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
