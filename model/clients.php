<?php
/**
 * Création de la classe clients
 */
class clients {

    // Liste des attributs
    protected $connexion;
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cardNumber;
    /**
     * Méthode construct
     */
    public function __construct() {
        //On teste les erreurs avec le try/catch
        //Si tout est bon, on est connecté à la base de données
        try {
            $this->connexion = new PDO('mysql:host=localhost; dbname=colyseum; charset=utf8', 'malikabhc', '11bdd27');
        }
        //Autrement, un message d'erreur est affiché
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
    /**
     * Méthode getClientsList pour récupérer le résultat de la requête
     */
    public function getClientsList() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `lastName`, `firstName` FROM `clients`');
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
    /**
     * Méthode getFirstTwentyClientsList pour récupérer le résultat de la requête
     */
    public function getFirstTwentyClientsList() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `lastName`, `firstName` FROM `clients` LIMIT 20');
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
    /**
     * Méthode getclientsLoyaltyCardList pour récupérer le résultat de la requête
     */
    public function getClientsLoyaltyCardList() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `clients`.`firstName`, `clients`.`lastName`, `cards`.`cardTypesId`, `clients`.`id`'
                . 'FROM `clients` '
                . 'INNER JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber`'
                . 'WHERE `cards`.`cardTypesId` = 1');
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
    /**
     * Méthode getclientsNameMList pour récupérer le résultat de la requête
     */
    public function getClientsNameMList() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `lastName`, `firstName` '
                . 'FROM `clients` '
                . 'WHERE `lastName` '
                . 'LIKE \'M%\' '
                . 'ORDER BY `lastName` ASC');
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
     /**
     * Méthode getClientsList pour récupérer le résultat de la requête
     */
    public function getClientsListInfos() {
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`birthDate`, `clients`.`cardNumber`, `clients`.`card`,'
                . 'IF(`cards`.`cardTypesId` = 1, \'Oui\', \'Non\' ) AS `cardTypesId`'
                . 'FROM `clients`'
                . 'LEFT JOIN `cards` '
                . 'ON `clients`.`cardNumber`=`cards`.`cardNumber`');
        if (is_object($PDOResult)) {
            // Stocke la requête dans $PDOResult
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
    /**
     * Méthode destruct
     */
    public function __destruct() {
        ;
    }
}
?>
