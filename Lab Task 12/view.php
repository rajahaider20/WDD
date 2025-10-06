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
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="card shadow p-4">
    <h2 class="text-center mb-4 text-primary">All Students</h2>
    <table class="table table-striped table-hover text-center align-middle">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
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
          <td><?= $row['ID'] ?></td>
          <td><?= $row['firstName'] ?></td>
          <td><?= $row['lastName'] ?></td>
          <td><?= $row['DOB'] ?></td>
          <td><?= $row['Address'] ?></td>
          <td><a href="update.php?id=<?= $row['ID'] ?>" class="btn btn-warning btn-sm">Update</a></td>
          <td><a href="delete.php?id=<?= $row['ID'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
    <a href="insert.php" class="btn btn-primary w-100">Add New Student</a>
  </div>
</div>
</body>
</html>
