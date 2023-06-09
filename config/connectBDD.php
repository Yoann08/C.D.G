<?php
class ConnectBDD {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    public $conn;

    public function __construct($servername, $username, $password, $dbname)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function connect() 
    {
        try 
        {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // Configuration supplémentaire pour afficher les erreurs PDO
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connexion à la base de données réussie!";
        } catch(PDOException $e) {
            echo "Erreur de connexion à la base de données: " . $e->getMessage();
        }
    }

    public function getConnection() 
    {
        return $this->conn;
    }

    public function closeConnection() 
    {
        $this->conn = null;
    }
}

// Utilisation de la classe Database pour se connecter à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cdg";

$database = new ConnectBDD($servername, $username, $password, $dbname);
$database->connect();

// Utilisation de la connexion
$conn = $database->getConnection();
// ... Effectuer des opérations avec la connexion ...

// Fermeture de la connexion
$database->closeConnection();
?>