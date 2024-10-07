<?php
session_start();
if (isset($_SESSION['message'])) {
  echo "<div class='alert alert-success'>" . $_SESSION['message'] . "</div>";
  unset($_SESSION['message']);
}
if (isset($_SESSION['error'])) {
  echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
  unset($_SESSION['error']);
}
include '../connection/index.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $categoryName = htmlspecialchars($_POST['categoryName']);
    $query = "INSERT INTO categories (name) VALUES (?)";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("s", $categoryName);
    
    if ($stmt->execute()) {
      $_SESSION['message'] = "Category added successfully!";
    } else {
      $_SESSION['error'] = "Error adding category!";
    }
    $stmt->close();
    header('Location: index.php');
}