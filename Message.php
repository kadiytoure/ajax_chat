<?php


class Message {
//creation object message

private $authoroftchat;
private $topic;
private $date;



function __construct($authoroftchat, $topic, $date) {
    $this->authoroftchat = $authoroftchat;
    $this->topic = $topic;
    $this->date = $date;
  
}
function getAuthoroftchat() {
    return $this->nom;
}

function getTopic() {
    return $this->motdepasse;
}

function getDate() {
    return $this->mail;
}

}

