<?php
include_once "../controller/PessoaController.php";
include_once "../dao/Database.php";
include_once "../model/Pessoa.php";


$pessoaController = new PessoaController();
$Pessoa = $PessoaController -> listarPessoa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #lista_usuarios {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #lista_usuarios th, #lista_usuarios td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #lista_usuarios th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

        #lista_usuarios tr:nth-child(even){background-color: #f2f2f2;}

        #lista_usuarios tr:hover {background-color: #ddd;}

        #lista_usuarios th a, .td-actions a {
            color: white;
        }
    </style>
</head>
<body>
    <table id="lista_usuarios">
        <thead>
            <th>Nome</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Excluir</th>
        </thead>
    </table>

    <tbody>
        <?php
            foreach ($pessoas as $pessoa){
                echo "<tr>";
                echo "<td><p>" . htmlspecialchars($pessoa['nome']) . "</p></td>";
                echo "<td><p>" . htmlspecialchars($pessoa['email']) . "</p></td>";
                echo "<td><a href='#" . $pessoa['id'] . "'>Editar</a></td>";
                echo "<td><a href='?action=excluir&id=" . $pessoa['id'] . "'>Excluir</a></td>";
                echo "</tr>";
            }

        ?>
        
    </tbody>
    </table>
</body>
</html>