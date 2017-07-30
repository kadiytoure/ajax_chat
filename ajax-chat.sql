CREATE DATABASE ajax_chat;
CREATE DATABASE ajax_chat_user;
use ajax-chat;
CREATE TABLE message (id INT PRIMARY KEY AUTO_INCREMENT, time timestamp (YYYY-MM-DD HH:MI:SS), text VARCHAR(9000));
