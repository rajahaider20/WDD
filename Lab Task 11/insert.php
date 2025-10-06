<?php
require_once "connect.php";

$message = "";
if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName  = $_POST['lastName'];
    $DOB       = $_POST['DOB'];
    $Address   = $_POST['Address'];

    $sql = "INSERT INTO STUDENTABLE (firstName, lastName, DOB, Address) 
            VALUES ('$firstName', '$lastName', '$DOB', '$Address')";

    if ($conn->query($sql) === TRUE) {
        $message = " Student added successfully!";
    } else {
        $message = " Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Student</title>
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
    h3 {
      color: #000000;
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
    .alert {
      background-color: #e7f3ff;
      color: #000000;
      border: 1px solid #0d6efd;
    }
  </style>
</head>
<body>
<div class="container mt-5" style="max-width: 500px;">
  <div class="card shadow p-4">
    <h3 class="text-center mb-4">Add New Student</h3>
    <?php if ($message) echo "<div class='alert text-center'>$message</div>"; ?>
    <form method="post">
      <input type="text" name="firstName" class="form-control mb-3" placeholder="First Name" required>
      <input type="text" name="lastName" class="form-control mb-3" placeholder="Last Name" required>
      <input type="date" name="DOB" class="form-control mb-3" required>
      <textarea name="Address" class="form-control mb-3" placeholder="Address" rows="3" required></textarea>
      <button type="submit" name="submit" class="btn btn-custom w-100">Add Student</button>
    </form>
    <a href="view.php" class="btn btn-custom w-100 mt-3">View All Students</a>
  </div>
</div>
</body>
</html>