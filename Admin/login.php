<!-- <?php
session_start();
require 'db.php';

 $sel="SELECT * FROM `users` WHERE `username`='$_POST[username]'";
 $que=$con->query($sel);
 if($que->num_rows==1){

 }

?> -->

<?php
    require("Connection.php");
?>
<html>
<head>
    <title>Admin Login Panel</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVjgpJ..." crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<div class="login-form">
    <h2>ADMIN LOGIN PANEL</h2>
    <form>
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Admin Name">
        </div>
        
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password">
        </div>

        <button type="submit">Sign In</button>
    </form>

    <div class="extra">
    </div>
</div>

</body>
</html>
