<?php
require_once "connect.php";
$students = $conn->query("SELECT * FROM STUDENTABLE");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Students List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ffffff;
      color: #000000;
    }
    .card {
      background-color: #f8f9fa;
      border: 2px solid #e0e0e0;
    }
    h2 {
      color: #000000;
    }
    .table thead {
      background-color: #0d6efd;
      color: white;
    }
    .btn-custom {
      background-color: #0d6efd;
      color: white;
      border: none;
    }
    .btn-custom:hover {
      background-color: #0b5ed7;
      color: white;
    }
  </style>
</head>
<body>
<div class="container mt-5">
  <div class="card shadow p-4">
    <h2 class="text-center mb-4">All Students</h2>
    <table class="table table-bordered text-center align-middle">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>DOB</th>
          <th>Address</th>
          <th colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $students->fetch_assoc()): ?>
        <tr>
          <td><?= $row['firstName'] ?></td>
          <td><?= $row['lastName'] ?></td>
          <td><?= $row['DOB'] ?></td>
          <td><?= $row['Address'] ?></td>
         </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
    <a href="insert.php" class="btn btn-custom w-100">Add New Student</a>
  </div>
</div>
</body>
</html>