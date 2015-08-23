ALTER TABLE `rooms` ADD `user_id` INT NOT NULL AFTER `name`;
ALTER TABLE `rooms` ADD INDEX(`user_id`);