<?php
$mail = $_POST["mail"];
$name = $_POST["name"];
$firstname = $_POST["firstname"];


if (!empty($_POST["mail"]) && !empty($_POST["name"]) && !empty($_POST["firstname"])) {
    $user = [
        "mail" => $mail,
        "name" => $name,
        "firstname" => $firstname
    ];
    //Reprend la valeur du json 
    $js = file_get_contents('bdd.json');
    //Remet en format lisible par php (tableau associatif)
    $js = json_decode($js, true);
    //Ajouter une nouvelle valeur à la suite du tableau Json (c'est pour cela qu'on reprend son ancien contenu)
    $js[] = $user;
    //Remet en format lisible par json
    $js = json_encode($js);
    //Ajoute au json
    file_put_contents('bdd.json', $js);

    //Pour montrez qu'on peux reprendre les info de n'importe ou
    $js2 = file_get_contents('bdd.json');
    $js2 = json_decode($js2, true);
    var_dump($js2);


    echo "Success";
    // Envoie en BDD après
}
