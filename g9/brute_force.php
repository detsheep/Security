<?php
include "header.php";
?>
<!DOCTYPE html>  
<html>  
<head>  
    <title>登录页面</title>  
</head>  
<style>  
        body {  
            font-family: Arial, sans-serif;  
            background-color: #f1f1f1;  
        }  
  
        .login-container {  
            position: absolute;  
            top: 50%;  
            left: 50%;  
            transform: translate(-50%, -50%);  
            width: 50%;  
            background-color: #ffffff;  
            border-radius: 5px;  
            padding: 20px;  
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);  
        }  
  
        h2 {  
            color: #333333;  
            text-align: center;  
        }  
  
        form {  
            display: flex;  
            flex-direction: column;  
            margin-top: 20px;  
        }  
  
        label {  
            display: block;  
            margin-bottom: 10px;  
        }  
  
        input[type="text"], input[type="password"] {  
            width: 100%;  
            padding: 10px;  
            margin-bottom: 20px;  
            border: 1px solid #dddddd;  
            border-radius: 5px;  
            font-size: 16px;  
        }  
  
        input[type="submit"] {  
            width: 50%;  
            padding: 15px;  
            background-color: #333333;  
            margin-top: 30px;
            margin-left:160px;
            color: #ffffff;  
            border: none;  
            border-radius: 5px;  
            cursor: pointer;  
        }  
    </style>
<body>  
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 50%;">
        <h2>用户登录</h2>  
        <form action="brute_force.php" method="post">  
            <div>  
                <label for="username">用户名:</label>  
                <input type="text" id="username" name="username" required>  
            </div>  
            <div>  
                <label for="password">密码:</label>  
                <input type="password" id="password" name="password" required>  
            </div>  
            <div>  
                <input type="submit" value="登录">  
            </div>  
            <?php  
// 获取用户提交的用户名和密码  
$username = $_POST['username'];  
$password = $_POST['password'];  
  

$validUsername = "admin";  
$validPassword = "admin";  
  

if(isset($username) && isset($password)){
    if ($username == $validUsername && $password == $validPassword) {  
        echo "登录成功！";  
    } else {  
        echo "登录失败！";  
    }  
}
?>
        </form>  
    </div>
</body>  
</html>
