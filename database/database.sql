CREATE DATABASE IF NOT EXISTS lab_sqli;
USE lab_sqli;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
    role VARCHAR(20)
);

INSERT INTO users VALUES
(1,'admin','admin123','administrator'),
(2,'student','student123','user');

CREATE TABLE secrets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    secret_data VARCHAR(100)
);

INSERT INTO secrets VALUES
(1,'FLAG{UNION_SQLI_SUCCESS}'),
(2,'MYSQL_ROOT=root');
