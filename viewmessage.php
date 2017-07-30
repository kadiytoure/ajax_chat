<?php
require_once './Message.php';
require_once './DataTchat.php';
session_start();
$data = new database();
$posts = $data->viewpost();
echo json_encode($posts);