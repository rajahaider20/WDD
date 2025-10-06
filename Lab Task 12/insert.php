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
        $message = "✅ Student added successfully!";
    } else {
        $message = "❌ Error: " . $conn->error;
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
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width: 500px;">
  <div class="card shadow p-4">
    <h3 class="text-center mb-4 text-primary">Add New Student</h3>
    <?php if ($message) echo "<div class='alert alert-info text-center'>$message</div>"; ?>
    <form method="post">
      <input type="text" name="firstName" class="form-control mb-3" placeholder="First Name" required>
      <input type="text" name="lastName" class="form-control mb-3" placeholder="Last Name" required>
      <input type="date" name="DOB" class="form-control mb-3" required>
      <textarea name="Address" class="form-control mb-3" placeholder="Address" rows="3" required></textarea>
      <button type="submit" name="submit" class="btn btn-success w-100">Add Student</button>
    </form>
    <a href="view.php" class="btn btn-outline-primary w-100 mt-3">View All Students</a>
  </div>
</div>
</body>
</html>
