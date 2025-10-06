# Student Management System

A simple PHP-based student management system with MySQL database integration. This application allows you to add and view student records through a clean, Bootstrap-styled interface.

## Features

- Add new student records
- View all students in a table format
- Responsive design using Bootstrap 5.3.3
- Clean and modern user interface
- Real-time success/error messages
- MySQL database integration

## Technologies Used

- **PHP** - Server-side scripting
- **MySQL** - Database management
- **Bootstrap 5.3.3** - Frontend styling
- **HTML5** - Page structure
- **CSS3** - Custom styling

## Database Setup

### 1. Create Database

```sql
CREATE DATABASE STUDENT;
```

### 2. Create Table

```sql
USE STUDENT;

CREATE TABLE STUDENTABLE (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    DOB DATE NOT NULL,
    Address TEXT NOT NULL
);
```

## Installation Instructions

1. **Install XAMPP/WAMP/MAMP** (or any PHP/MySQL environment)

2. **Start Apache and MySQL services**

3. **Create the database**:
   - Open phpMyAdmin (usually at `http://localhost/phpmyadmin`)
   - Create a new database named `STUDENT`
   - Run the table creation SQL query shown above

4. **Configure database connection**:
   - The default settings in `connect.php` are:
     - Server: `localhost`
     - Username: `root`
     - Password: `` (empty)
     - Database: `STUDENT`
   - Modify these if your setup is different

5. **Copy files to web server**:
   - Place all PHP files in your web server's root directory
   - For XAMPP: `C:\xampp\htdocs\student-management\`
   - For WAMP: `C:\wamp64\www\student-management\`

6. **Access the application**:
   - Navigate to `http://localhost/student-management/insert.php`

## Usage

### Adding a Student

1. Open `insert.php` in your browser
2. Fill in the form fields:
   - First Name (required)
   - Last Name (required)
   - Date of Birth (required)
   - Address (required)
3. Click "Add Student" button
4. Success/error message will be displayed
5. Click "View All Students" to see the complete list

### Viewing Students

1. Open `view.php` in your browser (or click the button from insert.php)
2. All student records will be displayed in a table
3. Click "Add New Student" to return to the insert form

## Database Configuration

Edit `connect.php` to match your MySQL settings:

```php
$server = "localhost";      // Your MySQL server
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$database = "STUDENT";      // Database name
```

## Features Overview

### Insert Page (insert.php)
- Form to add new students
- Success/error message display
- Link to view all students
- Bootstrap-styled interface

### View Page (view.php)
- Table displaying all student records
- Shows: First Name, Last Name, DOB, Address
- Link to add new students
- Responsive table design

### Database Connection (connect.php)
- Establishes MySQL connection
- Error handling for failed connections
- Reusable across all pages

## Styling

The application features:
- White background with light gray cards
- Blue primary buttons (#0d6efd)
- Bootstrap table styling
- Responsive design for mobile devices
- Shadow effects for visual depth
- Centered forms and tables