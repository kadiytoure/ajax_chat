<?php
class Message {
    public $text;
    public $timestamp;
    public $by;

 public function __construct($text,$by, $timestamp = NULL) {
        $this->text = $text;
        //TODO : si timestamp null : faire une newdate, sinon assigner le timestamp donné
        if( $timestamp == NULL) {
            //on peut rajouter l'heure en modifiant la parenthèse;
            $aujourdhui = date("y-m-d") ;
            $this->timestamp = $aujourdhui ;
        }
        
        $this->by = $by;
    }

function getText() {
    return $this->text;
}

function getTimestamp() {
    return $this->timestamp;
}

function getBy() {
    return $this->by;
}
}
?>
