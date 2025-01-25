<?php
require_once 'PessoaDAO.php';

class PessoaController {
    private $pessoaDAO;

    public function __construct() {
        $this->pessoaDAO = new PessoaDAO();
    }

    public function listarPessoas() {
        return $this->pessoaDAO->getAll();
    }

    public function editarPessoa($id = null) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

            if ($id) {
                $this->pessoaDAO->atualizar($id, $nome, $email, $telefone);
            } else {
                $this->pessoaDAO->cadastrar($nome, $email, $telefone);
            }

            header("Location: index.php");
            exit;
        }

        if ($id) {
            return $this->pessoaDAO->getById($id);
        }

        return null;
    }

    public function excluirPessoa($id) {
        $this->pessoaDAO->excluir($id);
        header("Location: index.php");
        exit;
    }
}