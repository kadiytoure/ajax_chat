<?php
include_once 'model/Message.php';
include_once 'index.html';
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
   echo "<pre>";
   var_dump($array);
   echo "</pre>";
   exit(1);
//convertir tableau en JSON, appliquer au tableau;
/*
} else {
echo "message error";
}
*/
/*


//request to read all the messages in the message table;
//recuperation de tout le contenu de la table message;
$query = $this->mssge->prepare("SELECT * FROM message");
//chaque entrée est affiché une à une

$query->execute();
while ($donnees = $query->fetch()){
     echo $donnees['mssge'] . '<br />';
}
 echo $donnees['mssge'] . '<br />';
 return $array;
//retournement du tableau en JSON
$json= json_encode($array);
?>*/
