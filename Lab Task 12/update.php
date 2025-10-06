<?php
require_once "connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM STUDENTABLE WHERE ID=$id");
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $dob = $_POST['DOB'];
    $address = $_POST['Address'];

    $conn->query("UPDATE STUDENTABLE SET firstName='$fname', lastName='$lname', DOB='$dob', Address='$address' WHERE ID=$id");
    header("Location: view.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width: 500px;">
  <div class="card shadow p-4">
    <h3 class="text-center mb-4 text-warning">Update Student</h3>
    <form method="post">
      <input type="text" name="firstName" class="form-control mb-3" value="<?= $row['firstName'] ?>" required>
      <input type="text" name="lastName" class="form-control mb-3" value="<?= $row['lastName'] ?>" required>
      <input type="date" name="DOB" class="form-control mb-3" value="<?= $row['DOB'] ?>" required>
      <textarea name="Address" class="form-control mb-3" rows="3" required><?= $row['Address'] ?></textarea>
      <button type="submit" class="btn btn-warning w-100">Update</button>
    </form>
    <a href="view.php" class="btn btn-outline-secondary w-100 mt-3">Back to List</a>
  </div>
</div>
</body>
</html>
