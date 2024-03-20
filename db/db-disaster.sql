-- Table for users
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('ADMIN', 'USER', 'STAFF') NOT NULL
);

-- Table for types of disasters
CREATE TABLE types (
    type_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

-- Table for reports
CREATE TABLE reports (
    report_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    type_id INT NOT NULL,
    description TEXT NOT NULL,
    longitude DECIMAL(10, 8) NOT NULL,
    latitude DECIMAL(10, 8) NOT NULL,
    status VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (type_id) REFERENCES types(type_id)
);

-- Table for report files
CREATE TABLE report_files (
    file_id INT AUTO_INCREMENT PRIMARY KEY,
    report_id INT NOT NULL,
    img_path VARCHAR(255) NOT NULL,
    FOREIGN KEY (report_id) REFERENCES reports(report_id)
);

-- Table for responses to reports
CREATE TABLE responses (
    response_id INT AUTO_INCREMENT PRIMARY KEY,
    report_id INT NOT NULL,
    user_id INT NOT NULL,
    description TEXT NOT NULL,
    FOREIGN KEY (report_id) REFERENCES reports(report_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);


-- Inserting rows into the types table
INSERT INTO types (name) VALUES
('Tanah longsor'),
('Kebakaran'),
('Angin Puting Beliung'),
('Banjir'),
('Evakuasi');

-- Inserting rows into the users table
INSERT INTO users (name, email, username, password, role) VALUES
('Admin', 'admin@example.com', 'admin', MD5('admin123'), 'ADMIN'),
('User', 'user@example.com', 'user', MD5('user123'), 'USER'),
('Staff', 'staff@example.com', 'staff', MD5('staff123'), 'STAFF');