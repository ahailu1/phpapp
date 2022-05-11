<?php
namespace PhpApp\Models;
use PDOException;
use PDO;
class DatabaseConfig {
public $dbUsername = 'alexh';
public $dbPassword = 'm3gn16t5k3jti';
public $dbName = 'videochat';
public $dbHost = 'localhost';
public $dbPort = 5432;
public function __construct(){
    try {
     $pdo = new PDO("pgsql:host={$this->dbHost};port={$this->dbPort};dbname={$this->dbName};user={$this->dbUsername};password={$this->dbPassword}");
        $statement = $pdo->query("select * from register_user")->fetchAll();
        foreach($statement as $item) {
            console_log($item[0]);
            echo $item;
            print $item;
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}



}




?>