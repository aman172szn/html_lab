<?php
$username = $email = $password = "";
$usernameErr = $emailErr = $passwordErr = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = htmlspecialchars($_POST["username"]);
    }

    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Valid email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    if (empty($_POST["password"]) || strlen($_POST["password"]) < 6) {
        $passwordErr = "Password must be at least 6 characters long";
    } else {
        $password = htmlspecialchars($_POST["password"]);
    }

    if (empty($usernameErr) && empty($emailErr) && empty($passwordErr)) {
        $successMessage = "Registration Successful! Thank you, " . $username . ".";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Arial", sans-serif; }
        body { background: linear-gradient(to right, #8360c3, #2ebf91); display: flex; justify-content: center; align-items: center; height: 100vh; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 350px; text-align: center; }
        h2 { color: #333; margin-bottom: 20px; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: none; border-radius: 5px; background: #f3f3f3; font-size: 16px; }
        input:focus { outline: none; border: 2px solid #8360c3; }
        .btn { background: #2ebf91; color: white; border: none; padding: 12px; width: 100%; border-radius: 5px; font-size: 18px; cursor: pointer; transition: 0.3s; }
        .btn:hover { background: #27a581; }
        .error { color: red; font-size: 14px; text-align: left; }
        .success { color: green; font-size: 16px; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
            <div class="error"><?php echo $usernameErr; ?></div>

            <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <div class="error"><?php echo $emailErr; ?></div>

            <input type="password" name="password" placeholder="Password">
            <div class="error"><?php echo $passwordErr; ?></div>

            <button type="submit" class="btn">Register</button>
        </form>

        <?php if ($successMessage): ?>
            <div class="success"><?php echo $successMessage; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
