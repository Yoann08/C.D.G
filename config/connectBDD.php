<?php
class ConnectBDD 
{
    public $conn;

    public function __construct() 
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cdg";

        try 
        {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Configuration supplémentaire pour afficher les erreurs PDO
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion à la base de données réussie!";
        } 
        catch(PDOException $e) 
        {
            echo "Erreur de connexion à la base de données: " . $e->getMessage();
        }
    }
}