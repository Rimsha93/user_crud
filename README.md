# 👤 User Management System (PHP CRUD)

A secure and professional User Management System built using **Core PHP** and **MySQL**.  
This project demonstrates full CRUD (Create, Read, Update, Delete) functionality with secure coding practices and a modern UI design.

## 🚀 Features

- ✅ Add New Users
- ✅ View All Users
- ✅ Edit User Information
- ✅ Delete Users
- ✅ Secure Password Hashing
- ✅ Clean & Professional UI
- ✅ Responsive Layout

## 🛠️ Technologies Used
- PHP (Core PHP)
- MySQL
- PDO (PHP Data Objects)
- HTML5
- CSS3

## 📁 Project Structure
user-crud/
│
├── index.php # Display all users
├── add.php # Add new user
├── edit.php # Edit user form
├── update.php # Update user logic
├── delete.php # Delete user
├── config.php # Database connection 
└── style.css # Professional theme styling

## 🗄️ Database Setup

### 1️⃣ Create Database

```sql
CREATE DATABASE user_crud;
2️⃣ Create Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
⚙️ Installation Guide
- Clone the repository
git clone https://github.com/your-username/user-crud.git

- Move project to your htdocs folder (if using XAMPP)
- Start:
      Apache
      MySQL
- Import database (using phpMyAdmin)
-Update database credentials inside:
  config.php

**Open in browser:**
http://localhost/user-crud/

🔐 Security Implementations:
✔ Password Hashing using password_hash()
✔ SQL Injection Protection (Prepared Statements)
✔ XSS Prevention
✔ Input Sanitization
✔ Secure Database Connection (PDO)

🎨 UI Preview
Professional Dark Theme
- Clean Tables
- Styled Forms
- Smooth Hover Effects

## Future Improvemens:
🔐 Login & Authentication System
🔎 Search Functionality
📄 Pagination
📊 Admin Dashboard
📤 CSV Export
🌐 Deployment (Render / Railway)

## 👩‍💻 Author:
Rimsha Zahid
BS Computer Science Student
Full Stack Web Development Enthusiast

🔗 LinkedIn: https://www.linkedin.com/in/rimsha-zahid-a9a9982b8

 Show Your Support!!!
If you like this project, consider giving it a ⭐ on GitHub!
This project is created for learning and portfolio purposes.
