<?php
/*
if (isset($_POST['mssge'])) {
    echo "hello! " . $_GET['mssge'];
} else {
    http_response_code(400);
    echo 'expects a text parameter';
}
*/
if (!empty($_POST['message'])){
echo $_POST['message'];
} else {
    http_response_code(400);
    header('Content-Type: text/plain');
    echo 'expect a message parameter';
}

class Message {
//creation object message

private $content;
private $time;




function __construct($content, $time) {
    $this->content = $content;
    $this->time = $time;
  
  
}
function getContent() {
    return $this->content;
}

function getTime() {
    return $this->time;
}

function genererhtmlmessage(){
    echo '<h2>Today<h2>';
    echo '<section>';
    echo '<h3> time: </h3><p>' . $this->time . '</p>';
    echo '<h3> content: </h3><p>' . $this->content . '</p>';
    echo '</section>';
}

}
