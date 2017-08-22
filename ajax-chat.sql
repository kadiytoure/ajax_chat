DROP DATABASE IF EXISTS `kadiy_ajax_chat`;
CREATE DATABASE `kadiy_ajax_chat` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
DROP USER 'ajax_chat_user'@'localhost';
CREATE USER 'kadiy'@'localhost' IDENTIFIED BY 'kadiy';
GRANT ALL PRIVILEGES ON `kadiy_ajax_chat`.* TO 'kadiy'@'localhost';
USE `kadiy_ajax_chat`;

CREATE TABLE `message` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `text` TEXT NOT NULL,
    `timestamp` TIMESTAMP NOT NULL,
    `by` TEXT NOT NULL
);

