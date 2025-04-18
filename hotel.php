<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Heaven Hotel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            text-align: center;
        }

        h1 {
            margin-bottom: 30px;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px;
            font-size: 18px;
            color: white;
            background-color: #3498db;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Heaven Hotel</h1>
        <a href="plogin.php" class="btn">Admin</a>
        <a href="user_home.php" class="btn">User</a>
    </div>

</body>
</html>
