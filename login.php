<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
<form action="./process.php" method="POST">
        <div class="form-element">
            <lable for="NAME">NAME</lable><br>
            <input type="text" name="NAME" placeholder="NAME" require>
        </div><br>

        <div class="form-element">
            <lable for="PASSWORD">PASSWORD</lable><br>
            <input type="password" name="PASSWORD" placeholder="PASSWORD" require>
        </div><br>

        <div class="form-element">
            <a href="signup.php">sign-up</a>
        </div><br>

        <div class="form-element">
            <button type="submit" name="login_user" class="add-btn">login</button>
        </div>
    </form>
</body>
</html>