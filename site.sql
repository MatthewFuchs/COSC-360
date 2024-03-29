-- SQL script to create user, post, post_comment, and image tables

CREATE TABLE IF NOT EXISTS user (
  id BIGINT(20) AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(50) NOT NULL,
  passwordHash VARCHAR(32) NOT NULL,
  username VARCHAR(50) NOT NULL,
  registeredAt DATETIME DEFAULT CURRENT_TIMESTAMP,
  profileText TEXT
);

CREATE TABLE IF NOT EXISTS post (
  id BIGINT(20) AUTO_INCREMENT PRIMARY KEY,
  authorId BIGINT(20) NOT NULL,
  title VARCHAR(50) NOT NULL,
  content TEXT NOT NULL,
  createdAt DATETIME DEFAULT CURRENT_TIMESTAMP,
  parentId BIGINT(20), -- For reply functionality within posts
  FOREIGN KEY (authorId) REFERENCES user(id)
);

CREATE TABLE IF NOT EXISTS post_comment (
  postId BIGINT(20) NOT NULL,
  id BIGINT(20) AUTO_INCREMENT PRIMARY KEY,
  parentId BIGINT(20), 
  title VARCHAR(100), 
  createdAt DATETIME DEFAULT CURRENT_TIMESTAMP,
  content TEXT NOT NULL,
  FOREIGN KEY (postId) REFERENCES post(id)
);

CREATE TABLE IF NOT EXISTS image (
  id BIGINT(20) AUTO_INCREMENT PRIMARY KEY,
  userId BIGINT(20) NOT NULL,
  imagePath VARCHAR(255) NOT NULL,
  uploadedAt DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (userId) REFERENCES user(id)
);

INSERT INTO user (email, passwordHash, username) VALUES ('test@example.com', 'pass', 'user');
GRANT ALL PRIVILEGES ON site_db.* TO 'user'@'localhost' IDENTIFIED BY 'pass';
FLUSH PRIVILEGES;