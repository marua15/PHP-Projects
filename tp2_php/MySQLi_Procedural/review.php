<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
</head>
<body>
    <form action="review_connection.php" method="post">
        <div class="portal">
            <h1>Movie Review</h1>
            <label for="firstname">First Name : </label>
            <input type="text" name="firstname" id="firstname" required>
            <label for="lastname">Last Name :</label>
            <input type="text" name="lastname" id="lastname" required>
            <br>
            <label for="email"> Email :</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="moviename">Movie Name :</label>
            <input type="text" name="moviename" id="moviename" required>
            <br>
            <label for="rate">Rate :</label>
            <input type="number" name="rate" id="rate">

            <button type="submit" name="submit">
                SUBMIT
            </button>
    
    </form>
    
</body>
</html>