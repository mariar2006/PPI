<?php
include('conexao.php');

// Cadastro de carro
if (isset($_POST['modelo'], $_POST['marca'], $_POST['ano'], $_POST['cor'], $_POST['placa'])) {
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $cor = $_POST['cor'];
    $placa = $_POST['placa'];

    $con = conectaBD();
    if ($con) {
        $sql = "INSERT INTO carros (modelo, marca, ano, cor, placa) VALUES (?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->execute([$modelo, $marca, $ano, $cor, $placa]);
        header("Location: home.php"); // Redireciona para a página de listagem
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Carro</title>
</head>
<body>
    <h2>Cadastrar Carro</h2>
    <form method="POST">
        Modelo: <input type="text" name="modelo" required><br><br>
        Marca: <input type="text" name="marca" required><br><br>
        Ano: <input type="number" name="ano" required><br><br>
        Cor: <input type="text" name="cor" required><br><br>
        Placa: <input type="text" name="placa" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
