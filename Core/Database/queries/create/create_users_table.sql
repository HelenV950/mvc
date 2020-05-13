  CREATE TABLE IF NOT EXISTS `users` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `first_name` VARCHAR(55) NOT NULL,
                `last_name` VARCHAR(55) NOT NULL,
                `email` VARCHAR(155) NOT NULL,
                `pass` TEXT NOT NULL,
                `birthday` DATE NOT NULL,
                `create_at` DATETIME NOT NULL,
                PRIMARY KEY (`id`)
            );

          