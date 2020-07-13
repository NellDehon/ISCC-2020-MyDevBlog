<?php
function connect_to_database() {
    $database_name = "localhost";
    $username = "root";
    $table = "Base2";
    try{
        $pdo = new PDO ( "mysql:host=$database_name; dbname=$table", $username);
        return $pdo;
        
    }
    catch (PDOException $e) {
        echo $e ->getMessage();
        return null;
    }
 
}
?>