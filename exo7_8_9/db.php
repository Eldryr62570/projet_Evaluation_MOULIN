<?php

/**
 * Class gestion bdd
 */
class db
{
    protected $_db;
    /**
     * Connexion a la bdd
     *
     * @return void
     */
    public function conndb()
    {
        try {
            $this->_db = new PDO('mysql:host=localhost;dbname=chienbdd;charset=utf8', 'root', '1234', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    /**
     * Retourne tout les chiens de la bdd fetch dans un array
     * @return array
     */
    public function printAllChien()
    {
        $sqlRequest = "SELECT * FROM `chien` ";
        $pdoStat = $this->_db->prepare($sqlRequest);
        $pdoStat->execute();
        return $pdoStat->fetchAll(PDO::FETCH_ASSOC);
    }
}
