<?php
require "Classes/DB.php";
/**
 * 1. Importez la table user dans une base de données que vous aurez créée au préalable via PhpMyAdmin
 * 2. En utilisant l'objet de connexion qui a déjà été défini =>
 *    --> Remplacez les informations de connexion ( nom de la base et vérifiez les paramètres d'accès ).
 *    --> Supprimez le dernier utilisateur de la liste, faites une capture d'écran dans PhpMyAdmin pour me montrer que vous avez supprimé l'entrée et pushez la avec votre code.
 *    --> Faites un truncate de la base de données, les auto incréments présents seront remis à 0
 *    --> Insérez un nouvel utilisateur dans la table ( faites un screenshot et ajoutez le au repo )
 *    --> Finalement, vous décidez de supprimer complètement la table
 *    --> Et pour finir, comme vous n'avez plus de table dans la base de données, vous décidez de supprimer aussi la base de données.
 */


try {
    $db = new DB();
    $db->delLastID();
    echo "<br>";
    $db->truncate();
    $db->requestUser('Toto','Alphonse','rue de la blague','69','69169','Tetaqueue','France','totp@blague.fr');
    echo "<br>";
    $db->delTable("user");
    echo "<br>";
    $db->delBDD("exo192");
}
catch (PDOException $exception) {
    echo $exception->getMessage();
}