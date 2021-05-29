<?php 

class Database{
    public static function connect(){
        $pdo = new PDO('mysql:host=remotemysql.com;dbname=cL0nbtnGzn','cL0nbtnGzn','Wxj7CaYFCi');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    
    public static function query($query, $params = array()){
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        if(explode(' ',$query)[0] == 'SELECT'){
            $data = $statement->fetchAll();
            return $data;
        }
    }
}


?>