<?php

class Conexao
{
    protected static $con;

    public static function getInstance()
    {
        try{
            self::$con = new PDO("mysql:host=localhost;dbname=computadores","root", "Lucas1990");
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$con;
        } catch(PDOException $e){
            echo "Erro ao conectar: ".$e->getMessage();
        }
        
    }


    public function insertNome($nome)
    {
    
        try{
            $sql = '';
            $sql = "INSERT INTO nome_computador(nome) VALUEs (:nome)";
            $stmt = self::$con->prepare($sql);
            $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
            $stmt->execute();
        }catch(PDOException $e){
            echo "Não foi possível inserir: ".$e->getMessage();
        }
    }

    public function getNome()
    {
        try {
            $sql = '';
            $sql = "SELECT nome FROM nome_computador";
            $stmt = self::$con->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $e) {
            echo "Não foi possível encontrar dados: ".$e->getMessage();
        }
    }
}
