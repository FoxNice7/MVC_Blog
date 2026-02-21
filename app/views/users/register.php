<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="users/register" method="post">
    <label for="username">User Name</label>
    <input type="text" name="username" id="username" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

    <select name="role" id="role">
        <option hidden>Select</option>
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>

    <button type="submit">Register</button>
   </form>
</body>
</html>