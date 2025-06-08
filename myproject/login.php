<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<h2>
    Login From
</h2>
<form method="POST" action="">
    Username:<input name="username" required><br><br>
    Password:<input name="password" required><br><br>
    <button type="submit">Submit</button>
</form>

<body>
    <?php
    // $username = "admin";
    // $password = password_hash("123456", PASSWORD_DEFAULT);
    $con = new mysqli("localhost", "root", "", "auth_demo");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $stmt = $con->prepare("Select password From user where username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($hash);
        $stmt->fetch();
        $stmt->close();
        if ($hash && password_verify($password, $hash)) {
            echo "<p>Login Successful! Welcome,$username</p>";
        } else {
            echo "<p>Invalid Username & Password</p>";
        }
    }
    ?>

</body>

</html>