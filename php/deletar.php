<?php
include('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $con = conectaBD();
    
    // Deleta o carro
    $sql = "DELETE FROM carros WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->execute([$id]);
    header("Location: home.php"); // Redireciona após a exclusão
}
?>
