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
