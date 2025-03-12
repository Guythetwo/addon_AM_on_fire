<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="css/style_signup.css">
</head>
<body>
<form action="./process.php" method="POST">

        <div class="form-element">
            <lable for="NAME">NAME</lable>
            <br>
            <input type="text" name="NAME" placeholder="NAME" require>
        </div><br>

        <div class="form-element">
            <lable for="PASSWORD">PASSWORD</lable>
            <br>
            <input type="password" name="PASSWORD" placeholder="PASSWORD" require>
        </div><br>

        <div class="form-element">
            <lable for="CONFIRM_PASSWORD">CONFIRM_PASSWORD</lable>
            <br>
            <input type="password" name="CONFIRM_PASSWORD" placeholder="CONFIRM_PASSWORD" require>
        </div><br>
        
        <div class="form-element">
            <button type="submit" name="Sign_up_user" class="add-btn">Sign up</button>
        </div><br>
    </form>
</body>
</html>