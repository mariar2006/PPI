<?php
include('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $con = conectaBD();
    
    // Recupera dados do carro
    $sql = "SELECT * FROM carros WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->execute([$id]);
    $carro = $stmt->fetch(PDO::FETCH_ASSOC);

    // Atualiza os dados
    if (isset($_POST['modelo'], $_POST['marca'], $_POST['ano'], $_POST['cor'], $_POST['placa'])) {
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $ano = $_POST['ano'];
        $cor = $_POST['cor'];
        $placa = $_POST['placa'];

        $sqlUpdate = "UPDATE carros SET modelo = ?, marca = ?, ano = ?, cor = ?, placa = ? WHERE id = ?";
        $stmtUpdate = $con->prepare($sqlUpdate);
        $stmtUpdate->execute([$modelo, $marca, $ano, $cor, $placa, $id]);
        header("Location: home.php"); // Redireciona após a edição
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carro</title>
</head>
<body>
    <h2>Editar Carro</h2>
    <form method="POST">
        Modelo: <input type="text" name="modelo" value="<?php echo $carro['modelo']; ?>" required><br><br>
        Marca: <input type="text" name="marca" value="<?php echo $carro['marca']; ?>" required><br><br>
        Ano: <input type="number" name="ano" value="<?php echo $carro['ano']; ?>" required><br><br>
        Cor: <input type="text" name="cor" value="<?php echo $carro['cor']; ?>" required><br><br>
        Placa: <input type="text" name="placa" value="<?php echo $carro['placa']; ?>" required><br><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
