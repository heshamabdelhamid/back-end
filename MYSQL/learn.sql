USE learn_db;

CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT UNIQUE PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    age INT NOT NULL
);

INSERT INTO users SET name="Hesham", age="23";

INSERT INTO users(name,age) VALUES("Ahmed","29"),("Mohamed","26");

SELECT * FROM users;
