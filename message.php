<?php
class Message {
    private $name;
    private $topic;
    private $receiver;

    function __construct($name, $topic, $receiver) {
        $this->name = $name;
        $this->topic = $topic;
        $this->receiver = $receiver;
    }

}
function getName() {
    return->$this->name;
}
function getTopic() {
    return->$this->topic;
}
function getReceiver() {
    return->$this->receiver;
}
?>
