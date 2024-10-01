<?php

class Database{
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "blogAula";
    private $porta = "3306";
    private $dbh;

public function __construct(){
    $dns = 'mysql:host=' .$this->host.';port='.$this->porta.';
    dbname'.$this->banco;
    $opcoes = [
        //aramazena em cache a conexão para se reutilizada,
        //evitando sobrecarga de uma nova conexão.
        PDO:: ATTR_PERSISTENT => true,
        //lança um PDOexeption se ocorre um error
        PDO:: ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
        ];
        try{
            //cria a instancia do PDO
            $this->dbh = new PDO($dns, $this->usuario, $this->senha,
            $opcoes);
        }catch(PDOException $error){
            print "Error!";$error->getMessage(). "<br/>";
            die();
        }
}
}