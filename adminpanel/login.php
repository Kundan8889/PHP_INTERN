<?php
session_start();
require 'db.php';

 $sel="SELECT * FROM `users` WHERE `username`='$_POST[username]'";
 $que=$con->query($sel);
 if($que->num_rows==1){

 }

?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <?php if ($error): ?>
        <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
