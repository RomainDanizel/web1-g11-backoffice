<?php
try {
    $bdd = new PDO("mysql:host=127.0.0.1;port=8889;dbname=rack;charset=utf8",
        "root",
        "root",
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    );
    static $bdd;
}
catch (Exception $e) {
    die('Error :' . $e->getMessage());
};


class Database{
    // Propriétés de la base de données
    private $host = "127.0.0.1";
    private $db_name = "rack";
    private $port = 8889;
    private $username = "root";
    private $password = "root";
    public $connexion;

    // Se connecter a la db
    public function getConnection(){
        // On commence par fermer la connexion si elle existait
        $this->connexion = null;

        // On essaie de se connecter
        try{
            $this->connexion = new PDO("mysql:host=" . $this->host . "port=" . $this->port . ";dbname=" . $this->db_name,
            $this->username,
            $this->password);
            $this->connexion->exec("set names utf8"); // On force les transactions en UTF-8
        }catch(PDOException $exception){ // On gère les erreurs éventuelles
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        // On retourne la connexion
        return $this->connexion;
    }
}
