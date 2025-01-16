<?php
/*função que conecta com o banco de dados e retorna a conexão com banco ou false */

function conectDb() {
    $user="root";
    $pass="MaRia0311";
    $database="crud";
    $host="localhost";

    $db= new PDO( "mysql:host=$host;dbname=$database",  $user,password:$pass);
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    

    if ($db) {
        return $db;
    }
    else {
        return false;
    }

}

function check_conn($conn_id): void{
    if ($conn_id ) {
        echo "Conexao concluida";
}
    else {
        echo "Erro ao conectar";
}
}
var_dump(conectDb());
check_conn(conectDb());

 ?>