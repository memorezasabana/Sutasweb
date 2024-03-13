-- Create users table
CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255)
);

-- Create disasters table
CREATE TABLE disasters (
    id_disaster INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    latitude DECIMAL(10, 8) NOT NULL,
    longitude DECIMAL(11, 8) NOT NULL,
    status VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_user) REFERENCES users(id_user)
);

-- Create disaster_comments table
CREATE TABLE disaster_comments (
    id_comment INT AUTO_INCREMENT PRIMARY KEY,
    id_disaster INT,
    comment TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_disaster) REFERENCES disasters(id_disaster)
);

-- Create disaster_images table
CREATE TABLE disaster_images (
    id_image INT AUTO_INCREMENT PRIMARY KEY,
    id_disaster INT,
    image_url VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_disaster) REFERENCES disasters(id_disaster)
);
