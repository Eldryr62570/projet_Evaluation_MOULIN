<?php
require("db.php");
/**
 * Class chien
 */
class chien extends db
{
    private $_nom;
    private $_age;
    private $_race;
    /**
     * Initialise les valeur du chien
     *
     * @param string $nom
     * @param string $age
     * @param string $race
     */
    public function __construct(string $nom, string $age, string $race)
    {
        $this->_nom = $nom;
        $this->_age = $age;
        $this->_race = $race;
    }
    /**
     * print tout les attribut du chien
     * @return void
     */
    public function printChien()
    {
        echo $this->_nom . "<br>";
        echo $this->_age . "<br>";
        echo $this->_race . "<br><br>";
    }
    /**
     * Insert en bdd le chien actuel
     *
     * @return void
     */
    public function insertChien()
    {
        $this->conndb(); //Connexion à la bdd
        $sqlRequest = "INSERT INTO `chien` ( `nom`, `age`, `race`) 
                        VALUES ( ?, ?, ?) "; //Requête
        $pdoStat = $this->_db->prepare($sqlRequest);
        $pdoStat->execute([$this->_nom, $this->_age, $this->_race]);
    }
}
