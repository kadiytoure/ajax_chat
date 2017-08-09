<?php
include_once 'model/Message.php';
// connexion to database
try{
    $connexion = new PDO('mysql:host=localhost;dbname=ajax_chat;charset=utf8','ajax_chat_user',  'API SQL');
}
catch(Exception $msg){
    echo  "Erreur";
}
//après catch, fin de la partie qui consiste à se connecter à la base de données;

// requête pour afficher et lire tout le contenu de la table message
$mssge = $connexion->query('SELECT * FROM message');
/*
if ($mssge->execute()){*/
// Author en gras,: "Message" (date);
//création du tableau sensé être retourné en json;
$array = [];
    while ($donnees = $mssge->fetch()){
     /*
     echo "<strong>" . $donnees['by'] . "</strong>" . ":";
     echo  $donnees['text']  ;
     echo "(" . ($donnees['timestamp']) . ")" ;
     echo $donnees['id'] . "<br/>"; 
     */
    
     $chat = new Message($donnees['text'], $donnees['by'], $donnees['timestamp']);
     //$chat.push.$array;
    $array[] = $chat;
  
}
// Avant d'envoyer des données, il est important de préciser
// quel type de données on envoie. Pour faire ça, il faut utiliser un header HTTP.
header("Content-Type: application/json");
echo json_encode($array);
//convertir tableau en JSON, appliquer au tableau;

?>

