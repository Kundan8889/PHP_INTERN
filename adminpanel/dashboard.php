<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }
    .topbar {
      background: #333;
      color: white;
      padding: 10px 20px;
      text-align: right;
      font-size: 14px;
    }
    .topbar a {
      color: #ddd;
      text-decoration: none;
      margin-left: 10px;
    }
    .container {
      display: flex; /* enables sidebar + main-content side-by-side */
      min-height: calc(100vh - 40px); /* full height minus topbar */
    }
    .sidebar {
      width: 200px;
      background: #222;
      color: white;
      padding: 20px;
      box-sizing: border-box;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .sidebar ul li {
      margin-bottom: 15px;
    }
    .sidebar ul li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      display: block;
      padding: 8px 12px;
      border-radius: 4px;
      transition: background 0.3s;
    }
    .sidebar ul li a:hover {
      background: #555;
    }
    .main-content {
      flex-grow: 1;
      background: white;
      padding: 30px;
      box-sizing: border-box;
    }
  </style>
</head>
<body>
  <div class="topbar">
    Welcome, <?= htmlspecialchars($username) ?> | <a href="logout.php">Logout</a>
  </div>

  <div class="container">
    <div class="sidebar">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Wallet</a></li>
        <li><a href="#">Transaction</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>

    <div class="main-content">
      <h2>Welcome to the Dashboard</h2>
      <p>This is a simple admin dashboard.</p>
    </div>
  </div>
</body>
</html>
