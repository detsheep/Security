<?php
include "header.php";
?>

<!DOCTYPE html>  
<html>  
<head>  
    <title>RCE测试</title>  
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
    <h1>RCE测试页面</h1>  
    <form method="post" action="rce.php">  
        <label for="command">输入要执行的命令：</label><br>  
        <input type="text" id="command" name="command"><br><br>  
        <input type="submit" value="执行命令">  
    </form>  
    <?php  
    if (isset($_POST['command'])) {  
        $command = $_POST['command'];  
        $output = shell_exec($command);  
        echo "<h2>命令执行结果：</h2>";  
        echo "<pre>$output</pre>";  
    }  
    ?>  
</div>
</body>  
</html>