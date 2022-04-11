<?php
require_once("chien.php");
//Récupération de nos variables
$nomchien1 = $_POST["nomchien1"];
$agechien1 = $_POST["agechien1"];
$racechien1 = $_POST["racechien1"];

$nomchien2 = $_POST["nomchien2"];
$agechien2 = $_POST["agechien2"];
$racechien2 = $_POST["racechien2"];

$nomchien3 = $_POST["nomchien3"];
$agechien3 = $_POST["agechien3"];
$racechien3 = $_POST["racechien3"];

//Instanciation des 3 chiens
$chien1 = new chien($nomchien1, $agechien1, $racechien1);
$chien2 = new chien($nomchien2, $agechien2, $racechien2);
$chien3 = new chien($nomchien3, $agechien3, $racechien3);
//Print des 3 chiens
$chien1->printChien();
$chien2->printChien();
$chien3->printChien();
//Insertion des 3 chiens
$chien1->insertChien();
$chien2->insertChien();
$chien3->insertChien();
header("Location: datatable.php");
