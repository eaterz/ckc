CREATE DATABASE book_list;
USE book_list;
CREATE TABLE books (
    book_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(100) NOT NULL,
    publication_year INT NOT NULL,
    availability BOOLEAN NOT NULL
);
INSERT INTO books (title, author, publication_year, availability) VALUES
    ('Anna Karenina', 'Leo Tolstoy', 1877, TRUE),
    ('The Great Gatsby', 'F. Scott Fitzgerald', 1925, TRUE),
    ('To Kill a Mockingbird', 'Harper Lee', 1960, FALSE),
    ('1984', 'George Orwell', 1949, TRUE),
    ('Pride and Prejudice', 'Jane Austen', 1813, TRUE),
    ('The Catcher in the Rye', 'J.D. Salinger', 1951, FALSE),
    ('The Lord of the Rings', 'J.R.R. Tolkien', 1954, TRUE);
    
    SELECT * FROM books;
    
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

ALTER TABLE books
MODIFY COLUMN publication_year DATE;

SELECT * FROM users;

To delete all information from the users table and reset the auto-increment ID to start with the first ID, you can use the following SQL statements:

sql
Copy code
-- Delete all information from the table
TRUNCATE TABLE borrowed_books;

-- Reset auto-increment value to start with the first ID
ALTER TABLE books availability = 1;
SELECT * FROM users;


INSERT INTO users (username, password) VALUES
    ('Admin', 'admin');
    
    
    CREATE TABLE borrowed_books (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    book_id INT,
    borrow_date DATE,
    return_date DATE,
    status VARCHAR(100),
    FOREIGN KEY (book_id) REFERENCES books(book_id),
    FOREIGN KEY (user_id) REFERENCES users(id)
    );
    
    
   SELECT * FROM borrowed_books;
	

ALTER TABLE books
MODIFY COLUMN category_id INT NOT NULL,
ADD FOREIGN KEY (category_id) REFERENCES categories(id);