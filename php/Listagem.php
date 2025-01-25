<?php
include_once "PessoaController.php";
$pessoaController = new PessoaController();
$pessoa = $pessoaController -> listarPessoas();

?>

<table id="lista_usuarios">
    <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Editar</th>
        <th>Excluir</th>
    </thead>
</table>

<tbody>
    <?php
        foreach ($pessoas as $pessoa) {
            echo "<tr>";
            echo "<td><p>" . htmlspecialchars($pessoa['nome']) . "</p></td>";
            echo "<td><p>" . htmlspecialchars($pessoa['email']) . "</p></td>";
            echo "<td><p>" . htmlspecialchars($pessoa['senha']) . "</p></td>";
            echo "<td><a href='#" . $pessoa['id'] . "'>Editar</a></td>";
            echo "<td><a href='?action=excluir&id=" . $pessoa['id'] . "'>Excluir</a></td>";
            echo "</tr>";
        }
     ?>
    </tbody>
</table>