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
            $aujourdhui = date("Y-m-d H:i:s") ;
            $this->timestamp = $aujourdhui ;
        } else {
            $this->timestamp = $timestamp;
        }
        
        $this->by = $by;
    }



}
?>
