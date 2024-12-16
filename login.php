<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(images/essu-bor.jpg);
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;

            background-color: green;
            background-blend-mode: multiply;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(167, 164, 164, 0.1);
            width: 300px;
        }

        #role > option :hover{
            background-color: #4CAF50;
        }

        h2 {
            text-align: center;
        }   

        label {
            font-size: 16px;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px;
            border: 1px solid grey;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container p {
            text-align: center;
            font-size: 14px;
            color: #888;
        }

        .form-container p a {
            color: #4CAF50;
            text-decoration: none;
        }

        .form-container p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>ESSU-Employees Union (ESSU-EU)</h2>
        <form action="login_process.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="role">Role:</label>
            <select id="role" name="role">
                <option value="2">User </option>
                <option value="1">Admin</option>
            </select>

            <input type="submit" value="Submit">
        </form>

        <p>Or, <a href="https://essuemployeesunion.wordpress.com/">click here</a> to continue as a guest.</p>
    </div>

</body>
</html>
