<?php
class Message {
    public $text;
    public $timestamp;
    public $by;

 public function __construct($text,$by) {
        $this->text = $text;
        $this->timestamp = new DateTime();
        $this->by = $by;
    }

function getText() {
    return $this->text;
}

function getTimestamp() {
    return $this->Timestamp;
}

function getBy() {
    return $this->by;
}
}
?>
