<?php
include "header.php";
?>
<!DOCTYPE html>  
<html>  
<head>  
    <title>反射型XSS攻击示例</title>  
</head>  
<style>  
        body {  
            font-family: Arial, sans-serif;  
            background-color: #f1f1f1;  
        }  
  
        .rce-container {  
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
  
        h1 {  
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
  
        input[type="text"] {  
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

    <h1>反射型XSS攻击示例</h1>  
  
    <form method="post" action="">  
        <label for="input">输入内容：</label>  
        <input type="text" id="input" name="input">  
        <input type="submit" value="提交">  
    </form>  
  
    <?php  
    // 获取用户提交的输入  
    $userInput = $_POST['input'];  
  
    // 输出用户输入  
    echo "<p>你输入的内容是：" . $userInput . "</p>";  
    ?>  
</div>
</body>  
</html>