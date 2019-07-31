CREATE TABLE `team`
(
`member_id` INT NOT NULL AUTO_INCREMENT,
`member_name` VARCHAR(100) NOT NULL,
`member_photo` VARCHAR(100) NULL,
`member_description` TEXT NULL,
PRIMARY KEY(`member_id`));

CREATE TABLE `course`
(
`course_id` INT NOT NULL AUTO_INCREMENT,
`course_name` VARCHAR(100) NOT NULL,
`course_img` VARCHAR(100) NOT NULL,
`course_duration` DECIMAL(3,1) NOT NULL,
`course_description` TEXT NULL,
PRIMARY KEY(`course_id`));

<?php echo password_hash("123", PASSWORD_DEFAULT);

INSERT INTO users(`user_login`, `password_hash`, `user_full_name`, `user_email`) 
VALUES('bruno', '$2y$10$9Gj3XN25vnSdfHkSrfrUZO.A0kyFtGw5CK.quB/dCzRFTPaWgW.Nq', 'Bruno Silva', 'bruno@gmail.com');

CREATE TABLE `users`
(
`user_id` INT NOT NULL AUTO_INCREMENT,
`user_login` VARCHAR(30) NOT NULL,
`password_hash` VARCHAR(255) NOT NULL,
`user_full_name` VARCHAR(100) NOT NULL,
`user_email` VARCHAR(100) NOT NULL,
PRIMARY KEY(`user_id`));