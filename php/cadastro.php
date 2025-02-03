<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <fieldset>
        <form action="PessoaController.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <input type = "text" name= "acao" value= "cadastrar" hidden>
            <input type="submit" value="Adicionar">
        </form>
    </fieldset>
</body>
</html>