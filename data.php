<?php
include_once './Message.php';
class database {
    private $db;
    public function __construct(){
$this->db = new PDO('mysql:host=localhost;dbname=first_db', 'toure', 'kadiy');
$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

function sendpost(Message $message) {
    $query = $this->db->prepare("INSERT INTO posts (authoroftchat, topic, date) " . 
    "VALUES (:authoroftchat, :topic, :date)");
    $query->bindValue(':authoroftchat', $message->getAuthoroftchat());
    $query->bindValue(':topic', $message->getTopic());
    $query->bindValue(':date', $message->getDate());
    $query->execute();
    return TRUE;
}
function viewpost(){
$array = [];
$query = $this->db->prepare("SELECT * FROM posts");
$query->execute();
while($line = $query->fetch()){
    $array[$line["id"]] ["authoroftchat"] = $line["authoroftchat"];
    $array[$line["id"]] ["topic"] = $line["topic"];
    $array[$line["id"]] ["date"] = $line["date"];
}
return $array;
}
}