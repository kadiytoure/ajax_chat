<?php
class Message {
//creation object message

private $text;
private $timestamp;





function __construct($text) {
    // condition si il n'ya pas de date alrs on la récupére et on l'a met;
    $this->text = $text;
    $this->timestamp = new Datetime();
   
  
  
}
function getText() {
    return $this->text;
}

function getTimestamp() {
    return $this->timestamp;
}
/*
function genererhtmlmessage(){
    echo '<h2>Today<h2>';
    echo '<section>';
    echo '<h3> time: </h3><p>' . $this->time . '</p>';
    echo '<h3> content: </h3><p>' . $this->content . '</p>';
    echo '</section>';
}
*/

}
?>