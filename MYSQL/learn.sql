-- haw to store database 

-- CREATE DATABASE IF NOT EXISTS DATABANSE_NAME;

CREATE DATABASE IF NOT EXISTS test_db;

-- IF NOT EXISTS HE IS OPPTION FOR CHECK DATABASE FIND OR NO 

-- I can access the database using this function => [ USE ] database_name 

USE test_db;

SHOW DATABASES;

-- SHOW this is function for show 

SHOW TABLES;

-- I can DELETE the database using this function => [ DROP ] database_name 

-- DROP test_db;

-- create table 

-- CREATE TABLE IF NOT EXISTS table_name(
--     column_name data_type(length) [NOT NULL] [DEFAULT value] [AUTO_INCREMENT] column_constraint;
-- );

CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT UNIQUE PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    age INT NOT NULL
);
 
-- insert data 
INSERT INTO users SET name="ali", age="20";
INSERT INTO users(name,age) VALUES("MIDO","26"),("EID","23");

-- SELSCT 
SELECT name,age FROM users;
SELECT ALL FROM users;
SELECT * FROM users;

-- ORDER BY 
SELECT * FROM users ORDER BY AGE ASC; -- DESC FROM A TO Z
SELECT * FROM users ORDER BY AGE DESC; -- DESC FROM Z TO A 

-- WHERE
SELECT * FROM users WHERE age <= 26 ORDER BY ASC;
SELECT * FROM users WHERE name = 'hesham', age = 23;

-- SELECT DISTINCT
-- When querying data from a table, you may get duplicate rows.
-- To remove these duplicate rows, you use the DISTINCT clause in the SELECT statement.
-- SELECT DISTINCT age FROM users;
-- As you can see clearly from the output,
-- the DISTINCT clause removes the duplicate last names from the result set.

-- AND , OR , BETWEEN
SELECT * FROM users  WHERE age BETWEEN 23 AND 26 ORDER BY age ASC;
SELECT * FROM users  WHERE age BETWEEN 23 AND 26 OR age = 29 ORDER BY age ASC;

--LIKE 
SELECT * FROM users  WHERE name LIKE '%h%';
SELECT * FROM users  WHERE name LIKE 'h_m';


ALTER TABLE classics DROP pages;

DELETE FROM table_name WHERE column_name = value_name 