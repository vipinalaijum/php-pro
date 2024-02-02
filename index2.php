<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h2>User Registration Form</h2>

    <form action="save2.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit" name="register">Register</button>
    </form>

</body>
</html>
