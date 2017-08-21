<?php

if (empty($_POST['message'])){
     http_response_code(400);
     header('Content-Type: text/plain');
     echo 'expect a message parameter';
     exit(1);
}
require_once("model/Message.php");
$msg = new Message($_POST['message'], $_POST['pseudo']);

// DEBUG: remove when connected to DB.
header('Content-Type: text/plain');
var_dump($msg);
//update connexion 
try  {
$connexion = new PDO('mysql:host=localhost;dbname=kadiy_ajax_chat;charset=utf8','kadiy',  'kadiy');
//chercher condition de sorte que si il y a une ereur celle-ci s'affiche;
}
catch(Exception $msg) {
    echo "Erreur" ;/*
        die('Erreur : '.$msg->getText());
*/
}


$mssge = $connexion->prepare('INSERT INTO message(`timestamp`, `text`, `by`) VALUES(:timestamp, :text, :by)');
$mssge->bindValue('timestamp', $msg->getTimestamp(), PDO::PARAM_STR) ;
$mssge->bindValue('text', $msg->getText(), PDO::PARAM_STR);
$mssge->bindValue('by', $msg->getBy(), PDO::PARAM_STR);
if ($mssge->execute()){
   echo 'ton message a bien été envoyé, félicitations!';
   exit(1);
} else {
echo "message error";
}





