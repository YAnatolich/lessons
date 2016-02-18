CREATE TABLE `tz`.`waiter` ( `id_waiter` INT NOT NULL AUTO_INCREMENT , 
`name` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , 
`surname` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
 PRIMARY KEY (`id_waiter`)) ENGINE = InnoDB;

CREATE TABLE `tz`.`food` ( `id_food` INT NOT NULL AUTO_INCREMENT ,
 `name_food` VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , 
`price` FLOAT(20) NOT NULL , PRIMARY KEY (`id_food`)) ENGINE = InnoDB;

 CREATE TABLE `tz`.`order` (
    `id_order`  INT AUTO_INCREMENT NOT NULL,
    `id_waiter`  INT NOT NULL,
    `date_order` DATE NOT NULL,
    PRIMARY KEY(`id_order`),
    FOREIGN KEY (`id_waiter`) REFERENCES `tz`.`waiter`(`id_waiter`)    
  ) ENGINE=InnoDB CHARACTER SET=UTF8 COLLATE utf8_unicode_ci;

CREATE TABLE `tz`.`order_food` (
    `id_order_food`  INT AUTO_INCREMENT NOT NULL,
    `id_food`  INT NOT NULL,    
    `id_order`  INT NOT NULL,
    PRIMARY KEY(`id_order_food`),
    FOREIGN KEY (`id_food`) REFERENCES `tz`.`food`(`id_food`)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
    FOREIGN KEY (`id_order`) REFERENCES `tz`.`order`(`id_order`)
    ON UPDATE CASCADE   
    ON DELETE RESTRICT   
  ) ENGINE=InnoDB CHARACTER SET=UTF8 COLLATE utf8_unicode_ci;


