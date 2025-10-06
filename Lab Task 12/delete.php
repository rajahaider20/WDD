<?php
require_once "connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM STUDENTABLE WHERE ID=$id");
}

header("Location: view.php");
exit();
?>
