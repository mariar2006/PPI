<?php
require_once 'db.php';

class PessoaDAO {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM pessoas");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM pessoas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function cadastrar($nome, $email, $telefone) {
        $stmt = $this->conn->prepare("INSERT INTO pessoas (nome, email, telefone) VALUES (?, ?, ?)");
        $stmt->execute([$nome, $email, $telefone]);
    }

    public function atualizar($id, $nome, $email, $telefone) {
        $stmt = $this->conn->prepare("UPDATE pessoas SET nome = ?, email = ?, telefone = ? WHERE id = ?");
        $stmt->execute([$nome, $email, $telefone, $id]);
    }

    public function excluir($id) {
        $stmt = $this->conn->prepare("DELETE FROM pessoas WHERE id = ?");
        $stmt->execute([$id]);
    }
}