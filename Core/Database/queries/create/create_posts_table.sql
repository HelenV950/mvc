
  CREATE TABLE IF NOT EXISTS `posts` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `user_id` INT NOT NULL,
                `title` VARCHAR(254) NOT NULL,
                `content` TEXT NOT NULL,
                `image` TEXT NOT NULL,
                `create_at` DATETIME NOT NULL,
                PRIMARY KEY (`id`),
                INDEX `id` (`id`),
                CONSTRAINT `FK__users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
            );