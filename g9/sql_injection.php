<?php
include('header.php');
?>
<!DOCTYPE html>  
<html>  
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
<head>  
    <title>Food Search</title>  
</head>  

<body>  
<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 50%;">

    <h1>Food Search</h1>  
    <form method="POST" action="sql_injection.php">  
        <input type="text" name="search_query" placeholder="输入食物名字(🍎🍌)">  
        <input type="submit" value="Search">  
    </form>  
    <div id="results">  


<?php  
// 连接到数据库  
$servername = "localhost";  
$username = "root";  
$password = "root";  
$dbname = "group9";  
  
$conn = new mysqli($servername, $username, $password, $dbname);  
if ($conn->connect_error) {  
    die("连接失败: " . $conn->connect_error);  
}  
  
// 处理用户输入的查询参数  
$search_query = $_POST['search_query'];  
  
// 创建查询语句，并对参数进行预处理和绑定  
$sql = "SELECT * FROM food WHERE name LIKE '$search_query';";  
$stmt = $conn->prepare($sql);  
$stmt->execute();  
  
// 获取查询结果并输出  
$result = $stmt->get_result();  
while ($row = $result->fetch_assoc()) {  
    echo " - Name: " . $row["name"] . " - Price: " . $row["price"] . "<br>";  
}  
  
// 关闭数据库连接和清理资源  
$stmt->close();  
$conn->close();  
?>
    </div>
</div>  
  
    <script>  
        // JavaScript代码来处理表单提交和显示结果  
        document.querySelector('form').addEventListener('submit', function(event) {  
            event.preventDefault(); // 阻止表单提交的默认行为  
            var searchQuery = document.querySelector('input[name="search_query"]').value;  
            fetch('sql_injection.php', { method: 'POST', body: 'search_query=' + encodeURIComponent(searchQuery)) })  
                .then(response => response.text())  
                .then(data => {  
                    document.getElementById('results').innerHTML = data;  
                });  
        });  
    </script>  
</body>
</html>