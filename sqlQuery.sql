CREATE TABLE `gatepass` (   `id` INT(255) NOT NULL AUTO_INCREMENT ,
                                                `username` VARCHAR(255) NOT NULL , 
                                                `name` VARCHAR(255) NOT NULL ,  
                                                `no` VARCHAR(2) NOT NULL ,  
                                                `room_no` VARCHAR(5) NOT NULL ,  
                                                `mobile` VARCHAR(12) NOT NULL ,  
                                                `date1` VARCHAR(88) NOT NULL ,  
                                                `date2` VARCHAR(88) NOT NULL ,  
                                                `reason` VARCHAR(1000) NOT NULL ,  
                                                `status` VARCHAR(50) NOT NULL ,    
                                                PRIMARY KEY  (`id`)); 

CREATE TABLE `user` (   `id` INT(255) NOT NULL AUTO_INCREMENT ,  
                                            `username` VARCHAR(255) NOT NULL ,  
                                            `name` VARCHAR(255) NOT NULL ,  
                                            `password` VARCHAR(12) NOT NULL ,  
                                            `mobile` VARCHAR(12) NOT NULL ,  
                                            `no` VARCHAR(3) NOT NULL ,  
                                            `room_no` VARCHAR(5) NOT NULL ,  
                                            `father_name` VARCHAR(255) NOT NULL ,  
                                            `mother_name` VARCHAR(255) NOT NULL ,  
                                            `parent_no` VARCHAR(12) NOT NULL ,  
                                            `address` VARCHAR(1000) NOT NULL ,  
                                            `email` VARCHAR(255) NOT NULL ,  
                                            `bday` VARCHAR(255) NOT NULL ,  
                                            `role` VARCHAR(255) NOT NULL ,    
                                            PRIMARY KEY  (`id`));

CREATE TABLE `feedback` (   `name` VARCHAR(255) NOT NULL ,  
                                                `email` VARCHAR(255) NOT NULL ,  
                                                `mobile` VARCHAR(12) NOT NULL ,  
                                                `feedback` VARCHAR(10000) NOT NULL );

CREATE TABLE `complain` (  `id` INT(255) NOT NULL AUTO_INCREMENT ,  
                                                `username` VARCHAR(255) NOT NULL ,  
                                                `name` VARCHAR(255) NOT NULL ,  
                                                `no` VARCHAR(2) NOT NULL ,  
                                                `room_no` VARCHAR(5) NOT NULL ,  
                                                `reason` VARCHAR(1000) NOT NULL ,  
                                                `status` VARCHAR(50) NOT NULL ,    
                                                PRIMARY KEY  (`id`));

CREATE TABLE `usertable` (  `id` INT(255) NOT NULL AUTO_INCREMENT ,  
                                                `name` VARCHAR(255) NOT NULL ,  
                                                `email` VARCHAR(255) NOT NULL ,  
                                                `password` VARCHAR(255) NOT NULL ,  
                                                `code` MEDIUMINT(50) NOT NULL ,  
                                                `status` TEXT NOT NULL ,    
                                                PRIMARY KEY  (`id`));