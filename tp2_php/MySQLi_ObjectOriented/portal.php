<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <link rel="stylesheet" href="portal.css">
</head>
<body>
    <form action="portal_connection.php" method="post">
        <div class="portal">
            <h1>Doctor's Portal</h1>
            <label for="firstname">First Name : </label>
            <input type="text" name="firstname" id="firstname" required>
            <label for="lastname">Last Name :</label>
            <input type="text" name="lastname" id="lastname" required>
            <br>
            <label for="id">Id :</label>
            <input type="text" name="id" id="id" required>
            <br>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" name="login">
                LOGIN
            </button>
    
    </form>
</body>
</html>