mysql -u root -p
CREATE DATABASE library;
USE library;

CREATE TABLE flower (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    color VARCHAR(50) NOT NULL
);

SHOW TABLES;

INSERT INTO flower (name, color) VALUES
('Rose', 'Red'),
('Tulip', 'Yellow'),
('Sunflower', 'Yellow');

SELECT * FROM flower;


CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    published_year INT,
    genre VARCHAR(100),
    price DECIMAL(10, 2)
);

SHOW TABLES;

INSERT INTO books (title, author, published_year, genre, price)
VALUES
    ('The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Fiction', 10.99),
    ('1984', 'George Orwell', 1949, 'Dystopian', 8.99),
    ('To Kill a Mockingbird', 'Harper Lee', 1960, 'Fiction', 12.99),
    ('The Catcher in the Rye', 'J.D. Salinger', 1951, 'Fiction', 9.99),
    ('Pride and Prejudice', 'Jane Austen', 1813, 'Romance', 6.99);



CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (username, email, password)
VALUES
    ('john_doe', 'john.doe@example.com', 'password123'),
    ('jane_smith', 'jane.smith@example.com', 'mypassword456'),
    ('alice_williams', 'alice.williams@example.com', 'alice789'),
    ('bob_jones', 'bob.jones@example.com', 'bob2024'),
    ('charlie_brown', 'charlie.brown@example.com', 'charliepass');
SELECT * FROM users;
