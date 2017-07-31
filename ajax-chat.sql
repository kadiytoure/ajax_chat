DROP DATABASE IF EXISTS `ajax_chat`;
CREATE DATABASE `ajax_chat` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
DROP USER 'ajax_chat_user'@'localhost';
CREATE USER 'ajax_chat_user'@'localhost' IDENTIFIED BY 'API SQL';
GRANT ALL PRIVILEGES ON `ajax_chat`.* TO 'ajax_chat_user'@'localhost';
USE `ajax_chat`;

CREATE TABLE `message` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `text` TEXT NOT NULL,
    `timestamp` TIMESTAMP NOT NULL
);

