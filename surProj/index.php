<!DOCTYPE html>
<html>
<head>
    <title>User Registration and Login System</title>
    <style>
        .container {
            width: 300px;
            padding: 16px;
            background-color: #f2f2f2;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid #ccc;
        }
        
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Registration and Login</h2>
        <form method="POST" action="welcome.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
