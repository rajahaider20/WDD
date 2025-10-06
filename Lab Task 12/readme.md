# Student Management System - CRUD Application

A complete PHP-based student management system with full CRUD (Create, Read, Update, Delete) operations and MySQL database integration. This application features a clean, Bootstrap-styled interface for managing student records.

## Database Setup

### 1. Create Database

```sql
CREATE DATABASE STUDENT;
```

### 2. Create Table

```sql
USE STUDENT;

CREATE TABLE STUDENTABLE (
    ID INT AUTO_INCREMENT PRIMARY KEY,
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

## Usage Guide

### Adding a Student (Create)

1. Open `insert.php` in your browser
2. Fill in the form fields:
   - First Name (required)
   - Last Name (required)
   - Date of Birth (required)
   - Address (required)
3. Click "Add Student" button
4. Success message or error message will be displayed
5. Click "View All Students" to see the complete list

### Viewing Students (Read)

1. Open `view.php` in your browser (or click the button from insert.php)
2. All student records will be displayed in a table with:
   - ID
   - First Name
   - Last Name
   - Date of Birth
   - Address
   - Action buttons (Update/Delete)

### Updating a Student (Update)

1. From the students list (`view.php`), click the "Update" button (yellow) for any student
2. The form will be pre-filled with the student's current information
3. Modify the fields as needed
4. Click "Update" button to save changes
5. You'll be redirected back to the students list

### Deleting a Student (Delete)

1. From the students list (`view.php`), click the "Delete" button (red) for any student
2. A confirmation dialog will appear asking "Are you sure?"
3. Click "OK" to confirm deletion or "Cancel" to abort
4. The student record will be removed from the database

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
- Success/error message display with emoji indicators
- Green "Add Student" button
- Link to view all students
- Bootstrap-styled card interface

### View Page (view.php)
- Striped, hoverable table displaying all student records
- Shows: ID, First Name, Last Name, DOB, Address
- Action buttons for each record:
  - **Update** (Yellow button)
  - **Delete** (Red button with confirmation)
- Link to add new students
- Responsive table design

### Update Page (update.php)
- Pre-filled form with existing student data
- Yellow-themed interface
- "Update" button to save changes
- "Back to List" button to cancel
- Automatic redirect to view page after update

### Delete Page (delete.php)
- Backend script that processes deletion
- Accepts student ID via GET parameter
- Removes record from database
- Automatically redirects to view page
- JavaScript confirmation prevents accidental deletion

### Database Connection (connect.php)
- Establishes MySQL connection using mysqli
- Error handling for failed connections with emoji 
- Reusable across all pages via `require_once`

## Styling

The application features:
- Light gray background (`bg-light`)
- White card containers with shadow effects
- Color-coded buttons:
  -  Add/Success operations
  -  Update operations
  -  Delete operations
  -  View/Navigation
- Striped and hoverable table rows
- Dark table header
- Responsive design for mobile devices
- Centered forms with max-width constraints

## JavaScript Features

- **Delete Confirmation**: `onclick="return confirm('Are you sure?')"` prevents accidental deletions
- Confirmation dialog appears before deleting any student record

## Browser Compatibility

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)

## Troubleshooting

### Connection Failed Error 
- Verify MySQL is running
- Check database credentials in `connect.php`
- Ensure database `STUDENT` exists

### Table Not Found Error
- Run the table creation SQL query
- Verify table name is `STUDENTABLE`
- Check that ID column is set as PRIMARY KEY with AUTO_INCREMENT

### Blank Page on Update/Delete
- Check PHP error logs
- Enable error display: `ini_set('display_errors', 1);`
- Verify student ID exists in database

### Update/Delete Not Working
- Ensure ID parameter is being passed correctly
- Check database connection is active
- Verify SQL query syntax

## Application Flow

```
insert.php (Add Student)
    ↓
view.php (View All Students)
    ↓                    ↓
update.php          delete.php
(Edit Student)      (Remove Student)
    ↓                    ↓
view.php ←──────────────┘
(Back to List)
```
