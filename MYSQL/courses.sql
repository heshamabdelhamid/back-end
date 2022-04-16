USE DB_learn;
CREATE TABLE courses(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL  PRIMARY KEY,
    title VARCHAR(40) NOT NULL 
);


USE DB_learn;
INSERT INTO courses(title)
VALUES("Web Design","Web Development", "PHP", "JavaScript", "Python");