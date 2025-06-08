
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Admin Panel</title>
</style>
</head>
<body>

<div class="topbar">
  Logged in as <strong><?= htmlspecialchars($username) ?></strong>
  <a href="logout.php">Logout</a>
</div>

<div class="container">
  <nav class="sidebar">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Wallet</a></li>
      <li><a href="#">Transaction</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>

  <section class="main-content">
    <h2>Welcome to your Dashboard</h2>
    <p>This is your admin panel. Customize content here.</p>
  </section>
</div>

</body>
</html>