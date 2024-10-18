<!DOCTYPE html>  
<html>  
<head>  
    <title>Security Testing Sidebar</title>  
    <style>  
        .sidebar {  
            width: 200px;  
            height: 650px;  
            overflow-y: auto;  
            border: 1px solid #ccc;  
            padding: 10px;  
            background-color: #f2f2f2;  
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);  
        }  
        .sidebar ul {  
            list-style-type: none;  
            padding:10px;  
            margin: 10px; 
            
        }  
        .sidebar li {  
            margin-bottom: 30px;  
        }  
        .sidebar a {  
            color: #333;  
            text-decoration: none;  
            font-weight: bold;  
            font-size: 18px;
        }  
        .sidebar a:hover {  
            color: #007bff;  
            text-decoration: underline;  
        }  
        .navbar {  
            background-color: #333;  
            color: #fff;  
            padding: 15px;  
            font-size: 20px;
        }  
        .navbar ul {  
            list-style-type: none;  
            margin: 0;  
            padding: 0;  
        }  
        .navbar li {  
            display: inline-block;  
            margin-right: 10px;  
        }  
        .navbar a {  
            color: #fff;  
            text-decoration: none;  
        }  
        .navbar a:hover {  
            text-decoration: underline;  
        }  
    </style>  
</head>  
<body>  
    <nav class="navbar">  
        <ul>  
            <li><a href="index.php">首页</a></li>  
            <li><a href="#">测试内容</a></li>  
        </ul>  
    </nav>  

    <div class="sidebar">  
        <ul>  
            <li><a href="upload.php">文件上传</a></li>  
            <li><a href="xss.php">XSS</a></li>  
            <li><a href="sql_injection.php">sql注入</a></li>  
            <li><a href="brute_force.php">暴力破解</a></li>  
            <li><a href="rce.php">RCE测试</a></li>
            <li><a href="rce2.php">RCE测试(无回显)</a></li>  
            <li><a href="unserialize.php">PHP反序列化</a></li>  
        </ul>  
    </div>  
</body>  
</html>
