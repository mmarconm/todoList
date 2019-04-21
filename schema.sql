-- Schema for mysql database

CREATE TABLE if not exists users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20)
);

CREATE TABLE if not exists items (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name TEXT,
    user INT,
    done INT,
    created DATETIME
);
