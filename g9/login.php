<!DOCTYPE html>  
<html>  
<head>  
    <title>登录页面</title>  
</head>  
<style>  
        body {  
            background-color: #f0f0f0;  
        }  
        form {  
            border: 3px solid #333333;  
            background-color: #fff;  
            width: 520px;  
            margin: 50px auto;  
            padding: 20px;  
            border-radius: 10px;  
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);  
        }  
        h2 {  
            text-align: center;  
            color: #333333;  
        }  
        label {  
            display: block;  
            margin-bottom: 10px;  
        }  
        input[type="text"], input[type="password"] {  
            width: 95%;  
            padding: 10px;  
            margin-bottom: 20px;  
            border: 1px solid #333333;  
            border-radius: 4px;  
        }  
        input[type="submit"] {  
            width: 60%;  
            background-color: #333333;  
            color: #fff;  
            border: none;  
            padding: 10px;  
            border-radius: 4px;  
            cursor: pointer;  
        }  
        input[type="submit"]:hover {  
            background-color: #0069d9;  
        }  
    </style>  
<body>  
    <h2>登录</h2>  
    <form method="post" action="login.php">  
        <label for="username">用户名:</label>  
        <input type="text" id="username" name="username" required><br><br>  
        <label for="password">密码:</label>  
        <input type="password" id="password" name="password" required><br><br>  
        <input type="submit" value="登录">  
    </form>  
</body>  
</html>
<?php  

$valid_username = 'admin';  
$valid_password = 'password';  
  
$username = $_POST['username'];  
$password = $_POST['password'];  

// select username from user where username=$username;

if ($username == $valid_username && $password == $valid_password) {  
    echo '登录成功！';  
} else {  
    echo '用户名或密码错误！';  
}  
?>
