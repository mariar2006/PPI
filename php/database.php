<?php 
/* Função qu conecta com o banco de dados  retorna uma conex~]ao com o banco ou false */

function connecta_bd(): void{
    $user = "root";
    $pass = "aluno";
    $database = "crud";
    $host = "localhost";

    $userpwd = "";
    $db = new PDO(dsn: "mysql:host=$host; dbname=$database", username: $user, password: $pass);
    if($db){
        return $db;
    } else {
        return false;
    }

}
function check_conn($conn_id): void{
    if ($conn_id) {
        echo "Conexão estabelecida com sucesso!";

    } else {
        echo "Erro ao conectar com o banco de dados!"
    }
}

var_dump(value: connecta_bd);
check_conn(conn_id: connecta_bd())

?>
