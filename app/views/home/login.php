<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="/auth/login" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Dang nhap">
    
    </form> 
</body>
</html>

<!-- Name: <input type="text" name="name" >
    </br>
    E-mail: <input type="text" name="email" >
    </br>
    Website: <input type="text" name="website" >
    </br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    </br>
    Gender:
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="female") echo "checked";?>
    value="female">Female
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="male") echo "checked";?>
    value="male">Male
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="other") echo "checked";?>
    value="other">Other
    </br>
    <input type="submit" value="Dang nhap"> -->