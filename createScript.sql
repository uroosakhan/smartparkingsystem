CREATE TABLE `register` (
 `user_id` int(12) NOT NULL AUTO_INCREMENT,
 `username` varchar(100) NOT NULL,
 `email` varchar(100) NOT NULL,
 `password` varchar(100) NOT NULL,
 PRIMARY KEY (`user_id`))

CREATE TABLE `slot` (
 `slot_id` int(11) NOT NULL AUTO_INCREMENT,
 `slot_no` varchar(100) NOT NULL,
 `time_added` datetime NOT NULL,
 `user_id` int(12) NOT NULL,
 PRIMARY KEY (`slot_id`),
 KEY `user_id` (`user_id`),
 FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`)
) 

CREATE TABLE `slot_admin` (
 `slot_id` int(11) NOT NULL AUTO_INCREMENT,
 `slot` varchar(100) NOT NULL,
 PRIMARY KEY (`slot_id`)
) 