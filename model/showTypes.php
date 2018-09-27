<?php
/**
* Création de la classe showTypes
*/
class showTypes {
  // Liste des attributs
  protected $connexion;
  public $id;
  public $type;
  /**
  * Méthode construct
  */
  public function __construct(){
    //On teste les erreurs avec le try/catch
    //Si tout est bon, on est connecté à la base de données
    try{
      $this->connexion = new PDO('mysql:host=localhost; dbname=colyseum; charset=utf8', 'malikabhc', '11bdd27');
    }
    //Autrement, un message d'erreur est affiché
    catch(Exception $e){
      die($e->getMessage());
    }
  }
  /**
  * Méthode getShowTypesList pour récupérer le résultat de la requête
  */
  public function getShowTypesList(){
    $isObjectResult = array();
    $PDOResult = $this->connexion->query('SELECT `type` FROM `showTypes`');
    if (is_object($PDOResult)) {
      // Stocke la requête dans $PDOResult
      $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
    }
    // Retourne $PDOResult
    return $isObjectResult;
  }
  /**
  * Retourne par ordre alphabétique, le titre de tous les spectacles ainsi que l'artiste, la date et l'heure.
  * @return type
  */
  public function getShowsList() {
    $PDOResult = $this->connexion->query(
      'SELECT `title`, `performer`, DATE_FORMAT(`date`, \'%d/%m/%Y\') AS `date`, TIME_FORMAT(`startTime`, \'%Hh%i\') AS `startTime`'
      . 'FROM `shows`'
      . 'ORDER BY `title`');
      if (is_object($PDOResult)) {
        // Stocke la requête dans $PDOResult
        $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
      }
      // Retourne $PDOResult
      return $isObjectResult;
    }
    public function __destruct() {
      ;
    }
  }
  ?>
